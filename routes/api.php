<?php

use App\Http\Controllers\HomeController;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

Route::post('/', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
    return Member::all();
});

Route::group(['prefix' => 'user', 'middleware' => 'auth:sanctum'], function () {

    Route::get('/', function (Request $request) {
        return $request->user();
    });

    // http://localhost:8000/api/languages/
    Route::get('/lang', [
        'uses' => [HomeController::class, 'lang'],
        'as' => 'lang.index'
    ]);
});

// http://localhost:8000/api/languages/
Route::get('/languages', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
    $json = loadJSON('languages');
    return json_decode($json);
//    dd(json_decode($json));
//    return Language::all();
});

// http://localhost:8000/api/country/
Route::get('/country', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
    $json = loadJSON('country');
    return json_decode($json);
//    return Country::all();
});

// http://localhost:8000/api/uploadphoto/
Route::get('/uploadphoto', function (Request $request) {
//    dd($request->query('filter'), $request->query('sort'));
    return Member::all();
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
