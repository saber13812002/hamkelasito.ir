<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MembersController;
use App\Models\Category;
use App\Models\Members;
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

Route::get('/', function () {

    $categories = Category::all();
    $members = Members::all();

    return view('home', [
        "categories" => $categories,
        "members" => $members
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


// https://www.itsolutionstuff.com/post/laravel-10-custom-login-and-registration-exampleexample

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('admin', [AuthController::class, 'admin']);

Route::get('category', [CategoryController::class, 'index']);

Route::get('members', [MembersController::class, 'index']);

//Route::get('/admin', function () {
//    Route::get('/', [AuthController::class, 'admin']);
//    Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index']);
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

