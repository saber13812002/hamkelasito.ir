<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Member;
use App\Models\Slider;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Dompdf\Dompdf;
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
        $filter = [];
        $global = 'all';
        $categoryId = null;
        if ($request->has('global')) {
            $global = $request->get('global');
        }
        if ($request->has('category_id')) {
            $categoryId = $request->get('category_id');
        }
        $membersBuilder = Member::query();
        if (!$global == 'all' || !$categoryId == null) {
            $membersBuilder = Member::query();
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
            $filterNameQuery = '%' . $filterName . '%';
            $membersBuilder->where('name', 'like', $filterNameQuery)
                ->orWhere('family', 'like', $filterNameQuery)
                ->orWhere('middle_name', 'like', $filterNameQuery)
                ->orWhere('alias', 'like', $filterNameQuery)
                ->orWhere('first_name_furigana', 'like', $filterNameQuery)
                ->orWhere('last_name_furigana', 'like', $filterNameQuery)
                ->orWhere('stage_name', 'like', $filterNameQuery);
            $filter['name'] = $filterName;
        }

        $members = $membersBuilder->get();

        $categories = Category::all();

        return view('models-list', compact('members', 'categories', 'filter'));

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
//            $pdf = Pdf::loadView('pdf.composite2', ['member' => $member, 'url' => config('app.url')]);


            $html = '
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Print Table</title>
	<style type="text/css">
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 10%;
		}

		td, th {
			border: 1px solid black;
			padding: 5px;
		}

		.first-row {
			height: 10%;
		}

		.second-row {
			height: 5%;
		}

		.third-row {
			height: 85%;
			text-align: center;
			vertical-align: middle;
		}

		.address {
			height: 5%;
			text-align: center;
			font-size: 12px;
			padding-top: 10px;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr class="first-row">
				<th>Column 1</th>
				<th>Column 2</th>
				<th>Column 3</th>
			</tr>
			<tr class="second-row">
				<th>Header 1</th>
				<th>Header 2</th>
				<th>Header 3</th>
			</tr>
		</thead>
		<tbody class="third-row">
			<tr>
				<td>Row 1, Column 1</td>
				<td>Row 1, Column 2</td>
				<td>Row 1, Column 3</td>
			</tr>
			<tr>
				<td>Row 2, Column 1</td>
				<td>Row 2, Column 2</td>
				<td>Row 2, Column 3</td>
			</tr>
			<tr>
				<td>Row 3, Column 1</td>
				<td>Row 3, Column 2</td>
				<td>Row 3, Column 3</td>
			</tr>
			<tr>
				<td>Row 4, Column 1</td>
				<td>Row 4, Column 2</td>
				<td>Row 4, Column 3</td>
			</tr>
			<tr>
				<td>Row 5, Column 1</td>
				<td>Row 5, Column 2</td>
				<td>Row 5, Column 3</td>
			</tr>
			<tr>
				<td>Row 6, Column 1</td>
				<td>Row 6, Column 2</td>
				<td>Row 6, Column 3</td>
			</tr>
			<tr>
				<td>Row 7, Column 1</td>
				<td>Row 7, Column 2</td>
				<td>Row 7, Column 3</td>
			</tr>
			<tr>
				<td>Row 8, Column 1</td>
				<td>Row 8, Column 2</td>
				<td>Row 8, Column 3</td>
			</tr>
			<tr>
				<td>Row 9, Column 1</td>
				<td>Row 9, Column 2</td>
				<td>Row 9, Column 3</td>
			</tr>
			<tr>
				<td>Row 10, Column 1</td>
				<td>Row 10, Column 2</td>
				<td>Row 10, Column 3</td>
			</tr>
		 </tbody>
		 <tfoot class="address">
		  <tr><td colspan="3">Address: Your Address | Email: your-email@example.com | Phone: +1234567890 </td></tr>
		 </tfoot>

	  </table>

	  <script type="text/javascript">
	  	window.print();
	  </script>

 </body>

 </html>
';

            $dompdf = new DOMPDF();
            $dompdf->load_html($html);
            $dompdf->render();
//            $dompdf->set_base_path('https://lili.pardisania.ir/storage/assets/css/composite.css');
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
