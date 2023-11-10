<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
});


// https://www.itsolutionstuff.com/post/laravel-10-custom-login-and-registration-exampleexample

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::get('apply-as-a-model', [AuthController::class, 'registration'])->name('become-a-model');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'web', 'verified']], function () {
    Route::get('', [AuthController::class, 'admin']);
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('members', [MemberController::class, 'index']);
    Route::get('sliders', [SliderController::class, 'index']);
    Route::get('languages', [LanguageController::class, 'index']);
    Route::get('countries', [CountryController::class, 'index']);
});


//Route::get('/admin', function () {
//    Route::get('/', [AuthController::class, 'admin']);
//    Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index']);
//});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('root');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/model-page', [App\Http\Controllers\HomeController::class, 'modelPage'])->name('model-page');
Route::get('/models-list', [App\Http\Controllers\HomeController::class, 'modelsList'])->name('models-list');

// STATIC PAGES
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/company-profile', [App\Http\Controllers\HomeController::class, 'companyProfile'])->name('company-profile');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/become-a-model', [App\Http\Controllers\HomeController::class, 'becomeModel'])->name('become-a-model');

// NEWS
Route::get('/news-result', [App\Http\Controllers\NewsController::class, 'newsResult'])->name('news-result');
Route::get('/news-category', [App\Http\Controllers\NewsController::class, 'newsCategory'])->name('news-category');
Route::get('/news-single', [App\Http\Controllers\NewsController::class, 'newsSingle'])->name('news-single');
Route::get('/news-single-company', [App\Http\Controllers\NewsController::class, 'newsSingleCompany'])->name('news-single-company');


// PDF
Route::get('/composite', [App\Http\Controllers\HomeController::class, 'composite'])->name('composite');

// DASHBOARD
Route::group(['prefix' => 'dashboard-models', 'middleware' => ['auth', 'web', 'verified']], function () {
    Route::get('', [App\Http\Controllers\MemberController::class, 'main'])->name('main');
    Route::get('role', [App\Http\Controllers\MemberController::class, 'role'])->name('role');
    Route::get('user-info', [App\Http\Controllers\MemberController::class, 'userInfo'])->name('user-info');
    Route::get('gallery', [App\Http\Controllers\MemberController::class, 'gallery'])->name('gallery');
    Route::get('video-gallery', [App\Http\Controllers\MemberController::class, 'videoGallery'])->name('video-gallery');
    Route::get('voice-gallery', [App\Http\Controllers\MemberController::class, 'voiceGallery'])->name('voice-gallery');
    Route::get('security-privacy', [App\Http\Controllers\MemberController::class, 'securityPrivacy'])->name('security-privacy');
    Route::get('account-info', [App\Http\Controllers\MemberController::class, 'accountInfo'])->name('account-info');

    Route::get('gallery-tag-edit', [App\Http\Controllers\MemberController::class, 'galleryTagEdit'])->name('gallery-tag-edit');
});

// email verification
Auth::routes(['verify' => true]);
