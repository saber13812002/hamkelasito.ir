<?php

use App\Http\Controllers\HomeController;
use App\Models\Member;
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

Route::any('/', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
    return Member::all();
});

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

// /api/uploadphoto/
Route::post('/uploadphoto', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
    Log::info($request);
    if ($request->hasFile('file')) {
        $file = $request->file('file');

        // Generate a unique filename
        $uniqId = uniqid();
        $filename = $uniqId . ($file->getClientOriginalExtension() ? '.' . $file->getClientOriginalExtension() : ".png");

        // Save the file to the storage directory
        $file->storeAs('uploads', $filename);

        $fullUrl = config('app.url') . '/uploads/' . $filename;
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
