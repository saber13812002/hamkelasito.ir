<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Member;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        $categories = Category::all();
        $members = Member::all();

        return view('home', [
            "categories" => $categories,
            "members" => $members
        ]);
    }

    public function modelPage(\Illuminate\Http\Request $request)
    {
        if ($request->has('id')) {
            $id = $request->id;
            $member = Member::query()->find($id);
            return view('model-page', compact('member'));
        } else
            return view('home');
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
}
