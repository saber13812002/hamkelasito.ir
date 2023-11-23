<?php

namespace App\Helpers;

use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;
use App\Models\SystemLog;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use niklasravnsborg\LaravelPdf\Pdf;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * PDF Generator for Invoices.
 *
 * @param string $user_id
 * @param string $type
 * @return bool
 */
class PdfHelper
{
    public static function getInvoice($invoice_id)
    {
        $invoice = Invoice::where('id', $invoice_id)->firstOrFail();

        if ($invoice->user->id != apiGetUser()->id) {
            throw new AccessDeniedHttpException();
        }

        if (!self::ifPdfGeneratedBefore($invoice)) {
            return self::returnPdfUrlIfGeneratedBefore($invoice);
        }

        self::createInvoiceFolderIfNotExist($invoice);


        try {
            $shop = $invoice->user->shop()->first();
            $orderItems = $invoice->orderItems()->get();

            if (!self::isOrderProductsExist($orderItems)) {
                SystemLog::error(sprintf("[helpers.pdf.get] Can't find related Objects : orderitems->product->product"));
                return null;
            }

            $lastSubscription = $shop->activePaidFreeShopSubscription();
            $lastSubscription->label = $lastSubscription->subscriptionPlan->label;

            $data = [
                'shop' => $shop,
                'customer' => $invoice->user,
                'order_items' => $orderItems,
                'orders' => $invoice->orders,
                'guild' => $shop->guild,
                'subscriptionPlan' => $lastSubscription,
                'created_date' => g2j($invoice->created_at, 'Y/M/d'),
            ];
        } catch (Exception $e) {
            SystemLog::error(sprintf("[helpers.pdf.get] Can't find related Objects : %s (%d)", $e->getMessage(), $e->getCode()));
            return null;
        }
        $pdf = self::generate_pdf($data);
        $fileName = generateFileName() . getFileType('PDF');
        $pdf->save(Storage::disk('invoice')->getAdapter()->getPathPrefix() . $fileName);
        $invoice->file = $fileName;
        $invoice->save();

        return self::decode(InvoiceResource::make($invoice));
    }

    public static function decode($responseData)
    {
        return json_decode(json_encode($responseData), true);
    }

    public static function generate_pdf($data)
    {
        $pdf = Pdf::loadView('pdf.document', $data);
        return $pdf;
    }

    public static function createInvoiceFolderIfNotExist($invoice)
    {
        if (Storage::disk('composite')->exists($invoice->url)) {
            $dirname = Storage::disk('composite')->getAdapter()->getPathPrefix();

            if (!Storage::disk('composite')->exists($dirname)) {
                Storage::disk('composite')->makeDirectory($dirname);
                File::makeDirectory($dirname);
            }
        }
    }

    public static function returnPdfUrlIfGeneratedBefore($invoice)
    {
        $invoice->url = Storage::disk('composite')->url($invoice->file);
        return self::decode(InvoiceResource::make($invoice));
    }

    public static function ifPdfGeneratedBefore($invoice)
    {
        return isNullOrEmpty($invoice->file);
    }

    public static function isOrderProductsExist($orderItems)
    {
        foreach ($orderItems as $orderItem) {
            if (!($orderItem->product && $orderItem->product->product)) {
                return false;
            }
        }
        return true;
    }
}
