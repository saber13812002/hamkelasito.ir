<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Member;
use App\Models\Slider;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController
{
    public function index()
    {
        $categories = Category::all();
        $members = Member::published()->get();
        $sliders = Slider::all();

        return view('home', compact('categories', 'members', 'sliders'));
    }

    public function modelPage(Request $request)
    {
        if ($request->has('id')) {
            $id = $request->id;
            $member = Member::query()->published()->find($id);
            return view('model-page', compact('member'));
        } else
            return redirect('home');
    }

    public function modelsList(FormRequest $request)
    {
        Log::info($request);
        $filter = [];
        $filterBoxOpen = false;
        $global = 'all';
        $categoryId = null;
        if ($request->has('global')) {
            $global = $request->get('global');
        }
        if ($request->has('category_id')) {
            $categoryId = $request->get('category_id');
            //
        }
        // TODO:
        if ($request->has('filter_nationality')) {

//            $categoryId = $request->get('category_id');
        }
        $membersBuilder = Member::query()->published();
        if (!$global == 'all' || !$categoryId == null) {
            if ($global != 'all') {
                $membersBuilder->whereType($global);
            }
//            dd($membersBuilder->get());
            $membersBuilder->whereModelCategories('Model');
            if ($categoryId == 1 || $categoryId == 2) {
                $membersBuilder->whereGender($categoryId == 1 ? "Male" : "Female");
            } else {
                $membersBuilder->where('age', '<', 18);
            }
//            dd($membersBuilder->get());
        }
        if ($request->has('s')) {
            $filterName = $request->get('s');

            $membersBuilder->name($filterName);

            $filter['name'] = $filterName;
            $filterBoxOpen = true;
        }

        if ($global != 'all') {
            $membersBuilder->whereType($global);
        }

        $members = $membersBuilder->get();

        $categories = Category::all();

        return view('models-list', compact('members', 'categories', 'filter', 'global', 'filterBoxOpen'));

    }

    public function lang(Request $request)
    {
        $user = Auth::user()->id;
        $locale = $request->language;
        App::setLocale($locale);
        session()->put('locale', $locale);
        // if you want to save the locale on your user table, you can do it here
        $user->locale = $locale;
        $user->save();
        return redirect()->back();
    }

    public function aboutUs()
    {
        return view('layouts.single-pages.about-us');
    }

    public function ContactUs(FormRequest $request)
    {
        Log::info($request);

        $contactUs = new ContactUs();
        $contactUs->name = $request->name;
        $contactUs->company = $request->company;
        $contactUs->mail = $request->mail;
        $contactUs->phone = $request->phone;
        $contactUs->category = $request->category;
        $contactUs->message = $request->message;
        $contactUs->save();
        return view('layouts.single-pages.contact-us');
    }

    public function companyProfile()
    {
        return view('layouts.single-pages.company-profile');
    }

    public function privacyPolicy()
    {
        return view('layouts.single-pages.privacy-policy');
    }

    public function becomeModel()
    {
        return view('become-a-model');
    }

    public function composite(Request $request)
    {
        if ($request->has('id')) {
            $id = $request->id;
            $member = Member::query()->published()->find($id);
            $url = config('app.url');
            $images = $this->getImages($member);
            $this->checkPhotos($images);
            return view('pdf.composite2', compact('member', 'url', 'images'));
        } else
            return redirect('home');
    }

    public function composite2(Request $request, $id)
    {
        if ($id) {
            $member = Member::query()->published()->find($id);
            $url = config('app.url');
            $images = $this->getImages($member);
            $this->checkPhotos($images);
            return view('pdf.composite', compact('member', 'url', 'images'));
        } else
            return redirect('home');
    }

    public function composite3(Request $request, $id)
    {
        if ($id) {
            $member = Member::query()->published()->find($id);
            $url = config('app.url');
            $pdf = PDF::loadView('pdf.composite2', compact('member', 'url'));
            return $pdf->download('composite-' . $id . '.pdf');
        } else
            return redirect('home');
    }

    public function composite4(Request $request, $id)
    {
        if ($id) {
            $member = Member::query()->published()->find($id);
            $url = config('app.url');
            $images = $this->getImages($member);
            $this->checkPhotos($images);
//            dd($images);
            $pdf = PDF::loadView('pdf.composite2', compact('member', 'url', 'images'));
            return $pdf->setPaper('a4', 'landscape')->download('composite_' . $id . '.pdf');
        } else
            return redirect('home');
    }


    public function getMemberPhoto($member, $dotExtension = '.jpg'): array
    {
        $PUBLIC = config('dompdf.public_path');
        $images['actual'] = $PUBLIC . '/img/3x4/' . $member->profile_image . $dotExtension;
        $images['actual_webp'] = $PUBLIC . '/img/3x4/' . $member->profile_image . '.webp';
        $images['url'] = config('app.url') . '/storage/assets/img/3x4/' . $member->profile_image . $dotExtension;
        $images['url_webp'] = config('app.url') . '/storage/assets/img/3x4/' . $member->profile_image . '.webp';
        return $images;
    }

    public function checkPhotos($images)
    {
//        dd($images);
        foreach ($images as $image) {
            $this->checkPhoto($image);
        }
    }

    public function checkPhoto($photoRelativeLocalAddress)
    {
//        dd($photoRelativeLocalAddress);
        if (file_exists($photoRelativeLocalAddress['actual'])) {
//            dd($photoRelativeLocalAddress['actual']);
            return $photoRelativeLocalAddress;
        } else {
            return $this->hs_webp2jpg($photoRelativeLocalAddress['actual_webp'], $photoRelativeLocalAddress['actual'], 100);;
        }
    }

    function hs_webp2jpg($source_file, $destination_file, $compression_quality = 100)
    {
        $image = imagecreatefromwebp($source_file);
        $result = imagejpeg($image, $destination_file, $compression_quality);
        if (false === $result) {
            return false;
        }
        imagedestroy($image);
        return $destination_file;
    }

    private function getImages($member): array
    {
        $images[] = null;
        for ($i = 0; $i < 5; $i++) {
            $image = $this->getMemberPhoto($member, '.jpg');
            $images[$i]['actual'] = $image['actual'];
            $images[$i]['actual_webp'] = $image['actual_webp'];
            $images[$i]['url'] = $image['url'];
            $images[$i]['url_webp'] = $image['url_webp'];
        }
        return $images;
    }

}
