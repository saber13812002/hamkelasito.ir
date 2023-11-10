<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;

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
    public function userInfoEdiSkills()
    {
        return view('dashboard.user-info-edit-skills');
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
}
