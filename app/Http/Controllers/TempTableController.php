<?php

namespace App\Http\Controllers;

use App\Models\TempTable;
use App\Http\Requests\StoreTempTableRequest;
use App\Http\Requests\UpdateTempTableRequest;

class TempTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $approve_items = TempTable::all();
        return view('admin.approval.index', compact('approve_items'));
    }
    /**
     * Display a listing of the resource.
     */
    public function memberTempTables($member_id)
    {
        $approve_items = TempTable::whereMemberId($member_id)->get();
        return view('admin.member.tempTables', compact('approve_items'));
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
    public function store(StoreTempTableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TempTable $tempTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TempTable $tempTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTempTableRequest $request, TempTable $tempTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TempTable $tempTable)
    {
        //
    }
}
