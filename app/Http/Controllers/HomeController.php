<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController
{

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
