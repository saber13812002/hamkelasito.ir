<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Models\City;
use App\Models\State;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::any('/',  [MemberController::class, 'api']);

Route::any('/search', [MemberController::class, 'search']);

Route::any('/filter', [MemberController::class, 'filter']);

Route::group(['prefix' => 'user', 'middleware' => 'auth:sanctum'], function () {

    Route::get('/', function (Request $request) {
        return $request->user();
    });

    // /api/languages/
    Route::get('/lang', [
        'uses' => [HomeController::class, 'lang'],
        'as' => 'lang.index'
    ]);
});

// /api/languages/
Route::get('/languages', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
    $json = loadJSON('languages');
    return json_decode($json);
//    dd(json_decode($json));
//    return Language::all();
});

// /api/country/
Route::get('/country', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
    $json = loadJSON('country');
    return json_decode($json);
//    return Country::all();
});


Route::get('/numcode', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
    $json = loadJSON('num-codes');
    return json_decode($json);
//    return Country::all();
});

Route::get('/state/{state}', function (Request $request, string $state) {
//    dd($request->query('filter'), $request->query('sort'));
    $json = loadJSON('state');
    return json_decode($json);
//    dd(json_decode($json));
    return State::all();
});


Route::get('/city/{city}', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
    $json = loadJSON('city');
    return json_decode($json);
//    dd(json_decode($json));
    return City::all();
});

Route::get('/city/', function (Request $request) {
    $json = loadJSON('city');
    return json_decode($json);
});

// /api/uploadphoto/
Route::group([
    'middleware' => ['auth:sanctum', 'cors'],
    'prefix' => '',
], function () {
    Route::any('/uploadphoto', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
//        Log::info($request->header('Authorization') ? "1" : "0");
//        Log::info();
        $user_id = 0;
        if (auth()->user()) {
            $user_id = auth()->user()->id;
        }
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Generate a unique filename
            $uniqId = uniqid();
            $extension = ($file->getClientOriginalExtension() ? $file->getClientOriginalExtension() : "png");
            $filename = $uniqId . '.' . $extension;

            // Save the file to the storage directory
            $file->storeAs('uploads', $filename);


            $relativeUrl = '/uploads/' . $filename;
            $fullUrl = $relativeUrl;

            if (config('app.env') == 'production') {
                $file->move(env('UPLOADER_LOCATION'), $filename);
            }
//        $image_resize = Image::make($file->getRealPath());
//        $image_resize->resize(636,852);
//        $path = 'uploads/thumbnails/' . $filename;
//        $image_resize->save($path);
//        $imageUri = 'uploads/thumbnails/' . $filename;

            $upload = new Upload();
            $upload->full_url = $fullUrl;
            $upload->name = $filename;
            $upload->extension = $extension;
            $upload->type = 'Image';
            $upload->relative_url = $relativeUrl;
            $upload->user_id = $user_id > 0 ? $user_id : null;
            $upload->save();

            return response()->json([
                'message' => 'File uploaded successfully',
                'url' => $fullUrl,
                'id' => $uniqId,
                'type' => 'photo',
                'name' => $filename,
                'thumbnail' => $fullUrl,
            ], 200);
        }
        return response()->json(['error' => 'No file uploaded'], 400);

    });
});

Route::post('/bookmark/{member_id}', function (Request $request, $member_id) {
    Log::info(json_decode($request));
    Log::info($member_id);
    Log::info(auth()->user() ? auth()->user()->id : "-");
    \Illuminate\Support\Facades\Session::put("bookmark_" . $member_id, $member_id);
//    $request->session()->put("bookmark_" . $member_id, $member_id);
    session(["bookmark__" . $member_id => $member_id]);
//    $request->session()->push("bookmark___" . $member_id, $member_id);

});


function loadJSON($filename): string
{
    $path = storage_path() . "/json/${filename}.json"; // ie: /var/www/laravel/app/storage/json/filename.json
//    dd($path);
    if (!File::exists($path)) {
        throw new Exception("Invalid File");
    }

    $file = File::get($path); // string

    // Verify Validate JSON?

    // Your other Stuff
    return $file;
}
