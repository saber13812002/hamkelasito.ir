<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * admin panel super admin
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function main()
    {
        return view('dashboard.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function role()
    {
        return view('dashboard.role');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfo()
    {
        return view('dashboard.user-info');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function gallery()
    {
        return view('dashboard.gallery');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function videoGallery()
    {
        return view('dashboard.video-gallery');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function voiceGallery()
    {
        return view('dashboard.voice-gallery');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function securityPrivacy()
    {
        return view('dashboard.security-privacy');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function accountInfo()
    {
        return view('dashboard.account-info');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function galleryTagEdit()
    {
        return view('dashboard.gallery-tag-edit');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEditBasicInfo()
    {
        return view('dashboard.user-info-edit-basic-info');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEditPhysicalInfo()
    {
        return view('dashboard.user-info-edit-physical-info');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEdiSkills()
    {
        return view('dashboard.user-info-edit-skills');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEditContact()
    {
        return view('dashboard.user-info-edit-contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEditBankAndVisa()
    {
        return view('dashboard.user-info-edit-bank-and-visa');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEditOther()
    {
        return view('dashboard.user-info-edit-other');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $members)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $members)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step0()
    {
        return view('apply_as.step-0');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step1(Request $request)
    {
//        dd($request);
        Log::info($request);
        return view('apply_as.step-1');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step2()
    {
        return view('apply_as.step-2');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step3()
    {
        return view('apply_as.step-3');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step4()
    {
        return view('apply_as.step-4');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step5()
    {
        return view('apply_as.step-5');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step6()
    {
        return view('apply_as.step-6');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step7()
    {
        return view('apply_as.step-7');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step8()
    {
        return view('apply_as.step-8');
    }
}
