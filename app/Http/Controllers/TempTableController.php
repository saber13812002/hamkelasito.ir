<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTempTableRequest;
use App\Http\Requests\UpdateTempTableRequest;
use App\Models\Member;
use App\Models\TempTable;
use Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class TempTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $approve_items = TempTable::whereNull('approved_at')->get();
        return view('admin.approval.index', compact('approve_items'));
    }

    /**
     * Display a listing of the resource.
     */
    public function memberTempTables($member_id)
    {
        $approve_items = TempTable::whereMemberId($member_id)
            ->whereNotNull('value')
            ->orWhereNotNull('json')
            ->orWhereNotNull('text')
            ->get();
        $member = Member::query()->where('id', $member_id)->first();
        return view('admin.member.tempTables', compact('approve_items', 'member'));
    }

    public function postApproveForm(FormRequest $request)
    {
//        dd($request);
        $approvedItems = $request->input('items', []);
//        dd($approvedItems);

        $approvalItems = TempTable::all();
        // Perform the approval logic for the selected items
        foreach ($approvedItems as $approvedItem) {
            $filteredItems = $approvalItems->where('id', $approvedItem);
            $item = $filteredItems->first();
//            dd($item);
            if ($item) {
                $item->approved_at = Carbon::now();
                if ($item->type == "string") {
                    try {
                        if ($item->user_id == 0) {
                            $model = new Member();
                            $model->update([$item->model_field => $item->value]);
                            $model->save();

                        } else {
                            $model = Member::find($item->user_id);
                            $model->update([$item->model_field => $item->value]);
                        }
                        $item->save();
                    } catch (Exception $e) {
                        Log::error('error in approve' . $e->getMessage());
                    }
                }
            }
        }
        // Redirect or return a response as needed

        $approve_items = TempTable::whereNull('approved_at')->get();
        return view('admin.approval.index', compact('approve_items'));
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
