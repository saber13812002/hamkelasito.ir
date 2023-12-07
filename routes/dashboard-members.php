<?php

use App\Http\Controllers\MemberController;
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

// DASHBOARD

//APPLY_AS_A_MODEL_FORM
    Route::get('apply-as-a-model-form-role', [MemberController::class, 'step0get'])->name('step0get');
Route::post('apply-as-a-model-form-role', [MemberController::class, 'step0'])->name('step0');
Route::get('apply-as-a-model-form-step-1', [MemberController::class, 'step1get'])->name('step1get')
    ->middleware('step.ctrl:1');;
Route::post('apply-as-a-model-form-step-1', [MemberController::class, 'step1'])->name('step1')
    ->middleware('step.ctrl:1');
Route::get('apply-as-a-model-form-step-2', [MemberController::class, 'step2get'])->name('step2get')
    ->middleware('step.ctrl:2');
Route::post('apply-as-a-model-form-step-2', [MemberController::class, 'step2'])->name('step2')
    ->middleware('step.ctrl:2');;
Route::get('apply-as-a-model-form-step-3', [MemberController::class, 'step3get'])->name('step3get')
    ->middleware('step.ctrl:3');
Route::post('apply-as-a-model-form-step-3', [MemberController::class, 'step3'])->name('step3')
    ->middleware('step.ctrl:3');
Route::any('apply-as-a-model-form-step-4', [MemberController::class, 'step4'])->name('step4')
    ->middleware('step.ctrl:4');
Route::any('apply-as-a-model-form-step-5', [MemberController::class, 'step5'])->name('step5')
    ->middleware('step.ctrl:5');
Route::any('apply-as-a-model-form-step-6', [MemberController::class, 'step6'])->name('step6')
    ->middleware('step.ctrl:6');
Route::any('apply-as-a-model-form-step-final-check', [MemberController::class, 'step7'])->name('step7')
    ->middleware('step.ctrl:7');
Route::any('apply-as-a-model-success', [MemberController::class, 'step8'])->name('step8')
    ->middleware('step.ctrl:8');


Route::get('', [MemberController::class, 'dashboardAdmin'])->name('dashboard-models');
Route::get('role', [MemberController::class, 'role'])->name('role');
Route::get('user-info', [MemberController::class, 'userInfo'])->name('user-info');
Route::get('gallery', [MemberController::class, 'gallery'])->name('gallery');
Route::get('video-gallery', [MemberController::class, 'videoGallery'])->name('video-gallery');
Route::get('voice-gallery', [MemberController::class, 'voiceGallery'])->name('voice-gallery');
Route::get('security-privacy', [MemberController::class, 'securityPrivacy'])->name('security-privacy');
Route::get('account-info', [MemberController::class, 'accountInfo'])->name('account-info');

Route::get('gallery-tag-edit', [MemberController::class, 'galleryTagEdit'])->name('gallery-tag-edit');
Route::get('user-info-edit-basic-info', [MemberController::class, 'userInfoEditBasicInfo'])->name('user-info-edit-basic-info');
Route::get('user-info-edit-physical-info', [MemberController::class, 'userInfoEditPhysicalInfo'])->name('user-info-edit-physical-info');
Route::get('user-info-edit-skills', [MemberController::class, 'userInfoEdiSkills'])->name('user-info-edit-skills');
Route::get('user-info-edit-contact', [MemberController::class, 'userInfoEditContact'])->name('user-info-edit-contact');
Route::get('user-info-edit-bank-and-visa', [MemberController::class, 'userInfoEditBankAndVisa'])->name('user-info-edit-bank-and-visa');
Route::get('user-info-edit-other', [MemberController::class, 'userInfoEditOther'])->name('user-info-edit-other');
