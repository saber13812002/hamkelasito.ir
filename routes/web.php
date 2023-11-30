<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/become-a-model', [App\Http\Controllers\AuthController::class, 'registration'])->name('register');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('register', [AuthController::class, 'registration'])->name('register');
//Route::get('apply-as-a-model', [AuthController::class, 'registration'])->name('apply-as-a-model');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('root');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/model-page', [App\Http\Controllers\HomeController::class, 'modelPage'])->name('model-page');
Route::any('/models-list', [HomeController::class, 'modelsList'])->name('models-list');

// STATIC PAGES
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUsGet'])->name('contact-us');
Route::post('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact-us-post');
Route::get('/company-profile', [App\Http\Controllers\HomeController::class, 'companyProfile'])->name('company-profile');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacyPolicy'])->name('privacy-policy');

// NEWS
Route::get('/news-result', [App\Http\Controllers\NewsController::class, 'newsResult'])->name('news-result');
Route::get('/news-category', [App\Http\Controllers\NewsController::class, 'newsCategory'])->name('news-category');
Route::get('/work', [App\Http\Controllers\NewsController::class, 'newsCategory'])->name('news-category');
Route::get('/news-single', [App\Http\Controllers\NewsController::class, 'newsSingle'])->name('news-single');
Route::get('/news-single-company', [App\Http\Controllers\NewsController::class, 'newsSingleCompany'])->name('news-single-company');

// PDF
Route::get('/composite', [App\Http\Controllers\HomeController::class, 'composite'])->name('composite');
Route::get('/composite2/{id}', [App\Http\Controllers\HomeController::class, 'composite2'])->name('composite2');
Route::get('/composite3/{id}', [App\Http\Controllers\HomeController::class, 'composite3'])->name('composite3');
Route::get('/composite4/{id}', [App\Http\Controllers\HomeController::class, 'composite4'])->name('composite4');
Route::get('/composite5/{id}', [App\Http\Controllers\HomeController::class, 'composite5'])->name('composite5');
Route::get('/composite6/{id}', [App\Http\Controllers\HomeController::class, 'composite6'])->name('composite6');

// Email Verification
Auth::routes(['verify' => true]);
