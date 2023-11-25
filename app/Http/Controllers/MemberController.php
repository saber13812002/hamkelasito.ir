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
        $members = Member::published()->get();
        return view('admin.member.index', compact('members'));
    }

    /**
     * api.
     */
    public function api(Request $request)
    {
        $data = $request->all();
//    dd($data);
//    return Member::published()->get();

//    dd($request->sort);
//    Member::published()->get();
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
        $phraseResults = Member::query()->published()->where('name', 'like', '%' . $phrase . '%');
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
        $memberBuilder = Member::query()->published();
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
        $stepId = 0;
        $saved = $this->getOldFormData([$stepId]);
        $token = session('token');
        return view('apply_as.step-0', compact('token', 'saved'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step0()
    {
        $stepId = 0;
        $saved = $this->getOldFormData([$stepId]);
        $token = session('token');
        return view('apply_as.step-0', compact('token', 'saved'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step1get()
    {
        $stepId = 1;
        $saved = $this->getOldFormData([$stepId]);
//        dd($saved);
        $token = session('token');
        return view('apply_as.step-1', compact('token', 'saved'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step1(Request $request)
    {
//        dd($request);
        $this->saveRequestToTempTable($request, 0);
        $stepId = 1;
        $saved = $this->getOldFormData([$stepId]);
        $token = session('token');
        return view('apply_as.step-1', compact('token', 'saved'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step2get()
    {
        $stepId = 2;
        $saved = $this->getOldFormData([$stepId]);
//        dd($saved);

        $options = $this->getOptions([$stepId]);
        $token = session('token');
        return view('apply_as.step-2', compact('token', 'saved', 'options'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step2(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 1);
        $stepId = 2;
        $saved = $this->getOldFormData([$stepId]);
        $options = $this->getOptions([$stepId]);
        $token = session('token');
        return view('apply_as.step-2', compact('token', 'saved', 'options'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step3get()
    {
        $stepId = 3;
        $saved = $this->getOldFormData([$stepId]);
//        dd($saved);
        $token = session('token');
        return view('apply_as.step-2', compact('token', 'saved'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step3(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 2);
        $stepId = 3;
        $saved = $this->getOldFormData([$stepId]);
        $token = session('token');
        return view('apply_as.step-3', compact('token', 'saved'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step4(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 3);
        $stepId = 4;
        $saved = $this->getOldFormData([$stepId]);
        $token = session('token');
        return view('apply_as.step-4', compact('token', 'saved'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step5(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 4);
        $stepId = 5;
        $saved = $this->getOldFormData([$stepId]);
        $token = session('token');
        return view('apply_as.step-5', compact('token', 'saved'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step6(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 5);
        $stepId = 6;
        $saved = $this->getOldFormData([$stepId]);
        $token = session('token');
        return view('apply_as.step-6', compact('token', 'saved'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step7(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 6);
        $stepId = 7;
        $saved = $this->getOldFormData([$stepId]);
        $token = session('token');
        return view('apply_as.step-7', compact('token', 'saved'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step8(FormRequest $request)
    {
        $this->saveRequestToTempTable($request, 7);
        $stepId = 8;
        $saved = $this->getOldFormData([$stepId]);
        $token = session('token');
        return view('apply_as.step-8', compact('token', 'saved'));
    }

    private function saveRequestToTempTable(Request $request, int $stepId)
    {
        $request->request->add(['step' => $stepId]);
        $userId = auth()->user()->id;

        if (!auth()->user()->member) {
            $member = new Member();
            $member->user_id = $userId;
            $member->save();
//            $user =auth()->user();
//            $user->member_id=$member->id;
//            $user->save();
        }
        Log::info($request);
//        dd(auth()->user());
//        $tempTable->member_id
        $tempFields = TempField::query()->whereStepId($stepId)->get();
//        dd($tempTable, $stepId, $tempFields);
        foreach ($tempFields as $tempField) {
//            dd($request->get('model_type'));
            if ($request->has($tempField->request_key)) {
                $tempTable = TempTable::query()
                    ->whereStepId($stepId)
                    ->whereUserId($userId)
                    ->whereModelField($tempField->request_key)
                    ->first();
//                dd($tempTable);
                if (!$tempTable) {
                    $tempTable = new TempTable();
                    $tempTable->step_id = $stepId;
                    $tempTable->user_id = $userId;
//                    $tempTable->member_id = auth()->user()->member()->id;
                    $tempTable['model_field'] = $tempField->request_key;
                    $tempTable['model_name'] = $tempField->model_name;
                    $tempTable['type'] = $tempField->type;
                }
                if ($tempField->type == 'json')
                    $tempTable['json'] = $request->get($tempField->request_key);
                else if ($tempField->type == 'text')
                    $tempTable['text'] = $request->get($tempField->request_key);
                else if ($tempField->type == 'file') {
                    $tempTable['value'] = $request->get($tempField->request_key);
                } else
                    $tempTable['value'] = $request->get($tempField->request_key);

//                dd($request,$tempTable,$tempField);
                $tempTable->save();
//            $tempTable->value = "";
//            $tempTable->text = "";
//            $tempTable->json = "";
            }

        }
    }

    /**
     * @return TempTable
     */
    public function getOldFormData(array $stepIds)
    {
        $saved = TempTable::query()
            ->whereUserId(auth()->user()->id)
            ->whereStepId($stepIds)
            ->get()
            ->pluck('value', 'model_field');
//        dd($saved['value'], isset($saved), isset($saved['model_type']));
        return $saved;
    }

    /**
     * @return array
     */
    public function getOptions(array $stepIds)
    {

//        $optionElement = OptionElement::query()
//            ->whereStepId($stepIds)
//            ->get();

//        dd($saved['value'], isset($saved), isset($saved['model_type']));

        $options = array();


        $options = $this->generateShoeUkSize($options);
        $options = $this->generateShoeEuSize($options);
        $options = $this->generateShoeUsMenSize($options);
        $options = $this->generateShoeUsWomenSize($options);
//        dd($options);
        return $options;
    }

    /**
     * @param array $options
     * @return array
     */
    public function generateShoeUkSize(array $options): array
    {
        $uk_sizes = array();
        for ($size = 0.5; $size <= 15; $size += 0.5) {
            $uk_sizes[] = $size;
        }
//        dd($uk_sizes);
        foreach ($uk_sizes as $key => $uk_size) {
            $options['shoe_uk_size'][$key]['name'] = $uk_size;
            $options['shoe_uk_size'][$key]['value'] = $uk_size;
        }
        return $options;
    }

    /**
     * @param array $options
     * @return array
     */
    public function generateShoeEuSize(array $options): array
    {
        $uk_sizes = array();
        for ($size = 16; $size <= 50; $size += 0.5) {
            $eu_sizes[] = $size;
        }
//        dd($uk_sizes);
        foreach ($eu_sizes as $key => $eu_size) {
            $options['shoe_eu_size'][$key]['name'] = $eu_size;
            $options['shoe_eu_size'][$key]['value'] = $eu_size;
        }
        return $options;
    }

    /**
     * @param array $options
     * @return array
     */
    public function generateShoeUsMenSize(array $options): array
    {
        $us_sizes = array();
        for ($size = 1; $size <= 13.5; $size += 0.5) {
            $us_sizes[] = $size."C";
        }
        for ($size = 1; $size <= 2; $size += 0.5) {
            $us_sizes[] = $size."Y";
        }
        for ($size = 5; $size <= 16; $size += 0.5) {
            $us_sizes[] = $size;
        }
//        dd($uk_sizes);
        foreach ($us_sizes as $key => $us_size) {
            $options['shoe_us_men_size'][$key]['name'] = $us_size;
            $options['shoe_us_men_size'][$key]['value'] = $us_size;
        }
        return $options;
    }

    /**
     * @param array $options
     * @return array
     */
    public function generateShoeUsWomenSize(array $options): array
    {
        $us_sizes = array();
        for ($size = 1; $size <= 13.5; $size += 0.5) {
            $us_sizes[] = $size."C";
        }
        for ($size = 1; $size <= 2; $size += 0.5) {
            $us_sizes[] = $size."Y";
        }
        for ($size = 5; $size <= 15.5; $size += 0.5) {
            $us_sizes[] = $size;
        }
//        dd($uk_sizes);
        foreach ($us_sizes as $key => $us_size) {
            $options['shoe_us_women_size'][$key]['name'] = $us_size;
            $options['shoe_us_women_size'][$key]['value'] = $us_size;
        }
        return $options;
    }
}
