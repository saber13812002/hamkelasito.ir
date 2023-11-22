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
        $categoryId = null;
        if ($request->has('global')) {
            $global = $request->get('global');
        }
        if ($request->has('category_id')) {
            $categoryId = $request->get('category_id');
        }
        if ($global == 'all' && $categoryId == null) {
            $members = Member::all();
        } else {
            $membersBuilder = Member::query();
            if ($global != 'all') {
                $membersBuilder->whereType($global);
            }
            $membersBuilder->whereModelCategories('Model');
            if ($categoryId == 1 || $categoryId == 2) {
                $membersBuilder->whereGender($categoryId);
            } else {
                $membersBuilder->where('age', 'lt', 18);
            }
            $members = $membersBuilder->get();
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


            $html = "
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Liliana Composite -No. 37 Name Consuelo</title>

</head>
<body>

<!-- header -->
<header id=\"header\">
    <div class=\"profile-name\">
        <div class=\"name\">Consuelo Lehner
            <span id=\"profile_id\">
                No. 37
            </span>
        </div>
        <div class=\"profile-meta\">
            <div class=\"jp-name\">Patrick</div>
        </div>
    </div>
    <div id=\"brand\">
        <img src=\"https://lili.pardisania.ir/storage/assets/img/logo.svg\" alt=\"liliana\">
    </div>
</header>

<!-- model meta -->
<div class=\"model-meta\">
    <div class=\"meta-item\">
        <div class=\"name\">Nationality</div>
        <div class=\"value\">USA</div>
    </div>
    <div class=\"vertical-divider\"></div>
    <div class=\"meta-item\">
        <div class=\"name\">Language</div>
        <div class=\"value\">en</div>
    </div>
    <div class=\"vertical-divider\"></div>
    <div class=\"meta-item\">
        <div class=\"name\">Height</div>
        <div class=\"value\">168</div>
    </div>
    <div class=\"vertical-divider\"></div>
    <div class=\"meta-item\">
        <div class=\"name\">Bust</div>
        <div class=\"value\">67</div>
    </div>
    <div class=\"vertical-divider\"></div>
    <div class=\"meta-item\">
        <div class=\"name\">Hips</div>
        <div class=\"value\">84</div>
    </div>
    <div class=\"vertical-divider\"></div>
    <div class=\"meta-item\">
        <div class=\"name\">Waist</div>
        <div class=\"value\">72</div>
    </div>
    <div class=\"vertical-divider\"></div>
    <div class=\"meta-item\">
        <div class=\"name\">Shoes</div>
        <div class=\"value\">44</div>
    </div>
    <div class=\"vertical-divider\"></div>
    <div class=\"meta-item\">
        <div class=\"name\">Eye</div>
        <div class=\"value\">Khaki</div>
    </div>
    <div class=\"vertical-divider\"></div>
    <div class=\"meta-item\">
        <div class=\"name\">Hair</div>
        <div class=\"value\">Gainsboro</div>
    </div>
</div>

<!-- model gallery -->
<div class=\"model-gallery\">
    <div class=\"model-base-image\">
        <img src=\"https://lili.pardisania.ir/storage/assets/img/3x4/037.webp\" alt=\"Image\">
    </div>
    <div class=\"model-gallery-images\">
        <img src=\"https://lili.pardisania.ir/storage/assets/img/3x4/037.webp\" alt=\"Image\">
        <img src=\"https://lili.pardisania.ir/storage/assets/img/3x4/037.webp\" alt=\"Image\">
        <img src=\"https://lili.pardisania.ir/storage/assets/img/3x4/037.webp\" alt=\"Image\">
        <img src=\"https://lili.pardisania.ir/storage/assets/img/3x4/037.webp\" alt=\"Image\">
    </div>
</div>

<!-- footer -->
<footer id=\"footer\">

    <div class=\"contacts\">
        <div class=\"contacts-item\">
            <div class=\"name\">Tel</div>
            <div class=\"value\">03-6362-3355</div>
        </div>
        <div class=\"vertical-divider\"></div>
        <div class=\"contacts-item\">
            <div class=\"name\">Fax</div>
            <div class=\"value\">03-6323-0195</div>
        </div>
        <div class=\"vertical-divider\"></div>
        <div class=\"contacts-item\">
            <div class=\"name\">Email</div>
            <div class=\"value\">info@lilianamodels.com</div>
        </div>
        <div class=\"vertical-divider\"></div>
        <div class=\"contacts-item\">
            <div class=\"name\">URL</div>
            <div class=\"value\">www.lilianamodels.com</div>
        </div>
        <div class=\"vertical-divider\"></div>
        <div class=\"contacts-item\">
            <div class=\"name\">Address</div>
            <div class=\"value\">4-4-8, Akasaka, Minato-ku, Tokyo, 107-0052</div>
        </div>
    </div>

</footer>

</body>
</html>";

            $dompdf = new DOMPDF();
            $dompdf->load_html($html);
            $dompdf->render();
            $dompdf->set_base_path('https://lili.pardisania.ir/storage/assets/css/composite.css');
            $dompdf->stream("hello.pdf");
//            return $pdf->download('composite-' . $id . '.pdf');
        } else
            return redirect('home');
    }

    public function composite3(Request $request, $id)
    {
        if ($id) {
            $member = Member::query()->find($id);
            $url = config('app.url');
            $pdf = PDF::loadView('pdf.composite2', compact('member', 'url'));
            return $pdf->download('composite-' . $id . '.pdf');
        } else
            return redirect('home');
    }

}
