<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use App\Models\TempField;
use App\Models\TempTable;
use Illuminate\Foundation\Http\FormRequest;
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
     * api.
     */
    public function api(Request $request)
    {
        $data = $request->all();
//    dd($data);
//    return Member::all();

//    dd($request->sort);
//    Member::all();
        return '';
    }

    /**
     * search .
     *
     */
    public function search(Request $request)
    {
//    dd($request->query('filter'), $request->query('sort'));
        $limit = 3;
        $phrase = $request->s;
        $phraseResults = Member::where('name', 'like', '%' . $phrase . '%');
        $foundItems = $phraseResults->limit($limit + 1)->get();
        $count = $foundItems->count();
        $foundItems = $phraseResults->limit($limit)->get();
        if ($count > 0)
            return view('search.results', compact('foundItems', 'count', 'phrase', 'limit'))->render();
        return view('search.not-found');
    }

    /**
     * filter results.
     *
     */
    public function filter(Request $request)
    {
//        dd($request->query('filter'), $request->query('sort'), $request->sort, $request);

//        dd($request->data);
        $memberBuilder = Member::query();
        $memberBuilder->whereId(1);
        $members = $memberBuilder->get();
        return view('layouts.single-pages.models-list-items', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function main()
    {
        $token = session('token');
        return view('dashboard.main', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function role()
    {
        $token = session('token');
        return view('dashboard.role', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfo()
    {
        $token = session('token');
        return view('dashboard.user-info', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function gallery()
    {
        $token = session('token');
        return view('dashboard.gallery', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function videoGallery()
    {
        $token = session('token');
        return view('dashboard.video-gallery', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function voiceGallery()
    {
        $token = session('token');
        return view('dashboard.voice-gallery', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function securityPrivacy()
    {
        $token = session('token');
        return view('dashboard.security-privacy', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function accountInfo()
    {
        $token = session('token');
        return view('dashboard.account-info', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function galleryTagEdit()
    {
        $token = session('token');
        return view('dashboard.gallery-tag-edit', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEditBasicInfo()
    {
        $token = session('token');
        return view('dashboard.user-info-edit-basic-info', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEditPhysicalInfo()
    {
        $token = session('token');
        return view('dashboard.user-info-edit-physical-info', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEdiSkills()
    {
        $token = session('token');
        return view('dashboard.user-info-edit-skills', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEditContact()
    {
        $token = session('token');
        return view('dashboard.user-info-edit-contact', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEditBankAndVisa()
    {
        $token = session('token');
        return view('dashboard.user-info-edit-bank-and-visa', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userInfoEditOther()
    {
        $token = session('token');
        return view('dashboard.user-info-edit-other', compact('token'));
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
    public function step0get()
    {
        $old = TempTable::query()->whereUserId(auth()->user()->id)->whereStepId(0)->get();
//        dd($old);
        $token = session('token');
        return view('apply_as.step-0', compact('token', 'old'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step0()
    {
        $token = session('token');
        return view('apply_as.step-0', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step1(Request $request)
    {
//        dd($request);
        $this->saveRequestToTempTable($request, 0);
        $token = session('token');
        return view('apply_as.step-1', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step2(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 1);
        $token = session('token');
        return view('apply_as.step-2', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step3(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 2);
        $token = session('token');
        return view('apply_as.step-3', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step4(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 3);
        $token = session('token');
        return view('apply_as.step-4', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step5(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 4);
        $token = session('token');
        return view('apply_as.step-5', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step6(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 5);
        $token = session('token');
        return view('apply_as.step-6', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step7(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 6);
        $token = session('token');
        return view('apply_as.step-7', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step8(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 7);
        $token = session('token');
        return view('apply_as.step-8', compact('token'));
    }

    private function saveRequestToTempTable(Request $request, int $stepId)
    {
        $request->request->add(['step' => $stepId]);
        Log::info($request);
//        dd(auth()->user());
//        $tempTable->member_id
        $tempFields = TempField::query()->whereStepId($stepId)->get();
//        dd($tempTable, $stepId, $tempFields);
        foreach ($tempFields as $tempField) {
//            dd($request->get('model_type'));
            if ($request->has($tempField->model_field)) {
                $tempTable = new TempTable();
                $tempTable->step_id = $stepId;
                $tempTable->user_id = auth()->user()->id;
                $tempTable['model_field'] = $tempField->model_field;
                $tempTable['model_name'] = $tempField->model_name;
                $tempTable['type'] = $tempField->type;
                if ($tempField->type == 'json')
                    $tempTable['json'] = $request->get($tempField->model_field);
                else if ($tempField->type == 'text')
                    $tempTable['text'] = $request->get($tempField->model_field);
                else if ($tempField->type == 'file') {
                    $tempTable['value'] = $request->get($tempField->model_field);
                } else
                    $tempTable['value'] = $request->get($tempField->model_field);

//                dd($request,$tempTable,$tempField);
                $tempTable->save();
//            $tempTable->value = "";
//            $tempTable->text = "";
//            $tempTable->json = "";
            }

        }
    }
}
