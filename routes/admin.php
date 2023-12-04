<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Proxy\Survey\SurveyController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TempFieldController;
use App\Http\Controllers\TempTableController;
use App\Http\Controllers\UserController;
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


Route::get('', [AuthController::class, 'admin'])->name('adminMain');
Route::get('categories', [CategoryController::class, 'index']);
Route::get('members', [MemberController::class, 'index'])->name('adminMember');
Route::get('users', [UserController::class, 'index']);
Route::get('sliders', [SliderController::class, 'index']);
Route::get('languages', [LanguageController::class, 'index']);
Route::get('countries', [CountryController::class, 'index']);
Route::get('fields', [TempFieldController::class, 'index']);
Route::get('approval', [TempTableController::class, 'index']);
Route::get('member-temp-table/{member_id}', [TempTableController::class, 'memberTempTables'])->name('admin.member.tempTables');
Route::get('contact-us', [ContactUsController::class, 'index']);

Route::post('/items/approve', [TempTableController::class, 'postApproveForm'])->name('items.approve');

// Survey
Route::get('survey', [SurveyController::class, 'index'])->name('admin.survey.index');
Route::get('packages', [SurveyController::class, 'packages'])->name('admin.survey.packages');
Route::get('questions/{package_id}', [SurveyController::class, 'questions'])->name('admin.survey.questions');
Route::get('choices/{question_id}', [SurveyController::class, 'choices'])->name('admin.survey.choices');

Route::get('/members/{member}/overview', [MemberController::class, 'loginMemberUpdatePage'])->name('loginMemberUpdatePage');
Route::post('/action/logout-member', [MemberController::class, 'backToAdmin'])->name('backToAdmin');

//Route::get('/admin', function () {
//    Route::get('/', [AuthController::class, 'admin']);
//    Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index']);
//});
