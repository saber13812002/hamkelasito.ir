<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Member;
use App\Models\Slider;
use Barryvdh\DomPDF\Facade\Pdf;
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
        $members = Member::all();
        $sliders = Slider::all();

        return view('home', compact('categories', 'members', 'sliders'));
    }

    public function modelPage(Request $request)
    {
        if ($request->has('id')) {
            $id = $request->id;
            $member = Member::query()->find($id);
            return view('model-page', compact('member'));
        } else
            return redirect('home');
    }

    public function modelsList(FormRequest $request)
    {
        Log::info($request);
        $global = 'all';
        if ($request->has('global')) {
            $global = $request->get('global');
        }
        if ($global == 'all') {
            $members = Member::all();
        } else {
            $members = Member::query()->whereType($global)->get();
        }

        $categories = Category::all();

        return view('models-list', [
            "categories" => $categories,
            "members" => $members
        ]);

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
            $member = Member::query()->find($id);
            return view('pdf.composite', compact('member'));
        } else
            return redirect('home');
    }

    public function composite2(Request $request, $id)
    {
        if ($id) {
            $member = Member::query()->find($id);
//            return view('pdf.composite', compact('member'));
            $pdf = Pdf::loadView('pdf.composite2', ['member' => $member, 'url' => config('app.url')]);
            return $pdf->download('composite-' . $id . '.pdf');
        } else
            return redirect('home');
    }

    public function composite3(Request $request, $id)
    {
        if ($id) {
            $member = Member::query()->find($id);
            $url = config('app.url');
            return view('pdf.composite2', compact('member', 'url'));
        } else
            return redirect('home');
    }
}
