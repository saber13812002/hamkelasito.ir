<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Member;
use App\Models\Slider;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        $categories = Category::all();
        $members = Member::all();
        $sliders = Slider::all();

        return view('home', compact('categories', 'members', 'sliders'));
    }

    public function modelPage(\Illuminate\Http\Request $request)
    {
        if ($request->has('id')) {
            $id = $request->id;
            $member = Member::query()->find($id);
            return view('model-page', compact('member'));
        } else
            return redirect('home');
    }

    public function modelsList(\Illuminate\Http\Request $request)
    {
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
        return view('about-us');
    }

    public function ContactUs()
    {
        return view('contact-us');
    }

    public function companyProfile()
    {
        return view('company-profile');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function becomeModel()
    {
        return view('become-a-model');
    }

    public function composite(\Illuminate\Http\Request $request)
    {
        if ($request->has('id')) {
            $id = $request->id;
            $member = Member::query()->find($id);
            return view('pdf.composite', compact('member'));
        } else
            return redirect('home');
    }
}
