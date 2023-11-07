<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
//        dd($members);
        return view('member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
