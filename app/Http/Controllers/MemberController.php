<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use App\Models\TempField;
use App\Models\TempTable;
use App\Models\Upload;
use App\Services\MemberService;
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
        Log::info($request);
//        dd($request->data);
        $perPage = $request->input('per_page', 10);
        $page = $request->input('page', 1);
        $memberBuilder = Member::query()->published();
        $memberBuilder->name($request->name);
        $members = $memberBuilder->paginate($perPage, ['*'], 'page', $page);
        return view('layouts.single-pages.models-list-section', compact('members'));
    }

    /**
     * filter results.
     *
     */
    public function archive(Request $request)
    {
//        dd($request->query('filter'), $request->query('sort'), $request->sort, $request);
        Log::info($request);
//        dd($request->data);

        $perPage = $request->input('per_page', 10);
        $page = $request->input('page', 1);

        $memberBuilder = Member::query()->published();
//        $memberBuilder->whereId(12);
        $members = $memberBuilder->paginate($perPage, ['*'], 'page', $page);
        return view('layouts.single-pages.models-list-items', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function dashboardAdmin()
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
        $this->getResponseObject();
        $stepId = 0;
        $compact = $this->getArr($stepId);
//        return view('apply_as.step-0', $compact);

        return response()
            ->view('apply_as.step-0', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step0()
    {
        $this->getResponseObject();

        $stepId = 0;
        $compact = $this->getArr($stepId);
//        return view('apply_as.step-0', $compact);

        return response()
            ->view('apply_as.step-0', $compact);
//            ->header('Content-Type', $contentType);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step1get()
    {

        $this->getResponseObject();

        $stepId = 1;
        $compact = $this->getArr($stepId);
//        return view('apply_as.step-1', $compact);

        return response()
            ->view('apply_as.step-1', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step1(Request $request)
    {
        $this->getResponseObject();
        $this->saveRequestToTempTable($request, 0);
        $stepId = 1;
        $compact = $this->getArr($stepId);
        return response()
            ->view('apply_as.step-1', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step2get()
    {
        $this->getResponseObject();
        $stepId = 2;
        $compact = $this->getArr($stepId);
        return response()
            ->view('apply_as.step-2', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step2(FormRequest $request)
    {
        $this->getResponseObject();
        $this->saveRequestToTempTable($request, 1);
        $stepId = 2;
        $compact = $this->getArr($stepId);
        return response()
            ->view('apply_as.step-2', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step3get()
    {
        $this->getResponseObject();
        $stepId = 3;
        $compact = $this->getArr($stepId);
        return response()
            ->view('apply_as.step-3', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step3(FormRequest $request)
    {
        $this->getResponseObject();
        $this->saveRequestToTempTable($request, 2);
        $stepId = 3;
        $compact = $this->getArr($stepId);
        return response()
            ->view('apply_as.step-3', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step4(FormRequest $request)
    {
        $this->getResponseObject();
        $this->saveRequestToTempTable($request, 3);
        $stepId = 4;
        $compact = $this->getArr($stepId);
        return response()
            ->view('apply_as.step-4', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step5(FormRequest $request)
    {
        $this->getResponseObject();
        $this->saveRequestToTempTable($request, 4);
        $stepId = 5;
        $compact = $this->getArr($stepId);
        return response()
            ->view('apply_as.step-5', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step6(FormRequest $request)
    {
        $this->getResponseObject();
        $this->saveRequestToTempTable($request, 5);
        $stepId = 6;
        $compact = $this->getArr($stepId);
        return response()
            ->view('apply_as.step-6', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step7(FormRequest $request)
    {
        $this->getResponseObject();
        $this->saveRequestToTempTable($request, 6);
        $stepId = 7;
        $compact = $this->getArr($stepId);
        return response()
            ->view('apply_as.step-7', $compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function step8(FormRequest $request)
    {
        $this->getResponseObject();
        $this->saveRequestToTempTable($request, 7);
        $stepId = 8;
        $compact = $this->getArr($stepId);
        return response()
            ->view('apply_as.step-8', $compact);
    }

    private function checkExitMember($userId): Member
    {
        $request->request->add(['step' => $stepId]);
        $user = auth()->user();
        $userId = $user->id;
//        dd($user->member());
        if (!$user->member()) {
            $member = new Member();
            $member->user_id = $userId;
            $member->save();
//            $user =auth()->user();
//            $user->member_id=$member->id;
//            $user->save();
        } else {
            $member = $user->member();
        }
        return auth()->user()->getMember;
    }

    private function saveRequestToTempTable(Request $request, int $stepId)
    {
        $request->request->add(['step' => $stepId]);
        $userId = auth()->user()->id;
        $member = $this->checkExitMember($userId);
        MemberService::updateLevelStep($member, $stepId);
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
            ->whereType('string')
            ->get()
            ->pluck('value', 'model_field');
//        dd($saved['value'], isset($saved), isset($saved['model_type']));
//        dd($saved);
        return $saved;
    }

    /**
     * @return array
     */
    public function getOldFileData(array $stepIds)
    {
        $saved = TempTable::query()
            ->whereUserId(auth()->user()->id)
            ->whereStepId($stepIds)
            ->whereType('file')
            ->get()
            ->pluck('value', 'model_field');
//        dd($saved);
        $saved_file = null;
        foreach ($saved as $key => $save) {
//            dd($key, $save);
            $items = explode(',', $save);
            $uploads = Upload::whereIn('id', $items)->get();
//            dd($uploads);
            $string = '[';
            $count = 0;
            foreach ($uploads as $upload) {
                $count++;
                $string .= ($count > 1 ? ',' : '') . '{"message":"File uploaded successfully","url":"' . $upload->full_url . '","id":"' . $upload->id . '","type":"photo","name":"' . $upload->name . '","thumbnail":"' . $upload->full_url . '"}';
            }
            $string .= ']';
            $saved_file[$key] = $string;
        }
//        dd($saved_file);
        return $saved_file;
    }
//

    /**
     * @return TempTable
     */
    public function getOldJsonData(array $stepIds)
    {
        return TempTable::query()
            ->whereUserId(auth()->user()->id)
            ->whereStepId($stepIds)
            ->whereType('json')
            ->get()
            ->pluck('json', 'model_field');
    }

    /**
     * @return TempTable
     */
    public function getOldTextData(array $stepIds)
    {
        return TempTable::query()
            ->whereUserId(auth()->user()->id)
            ->whereStepId($stepIds)
            ->whereType('text')
            ->get()
            ->pluck('text', 'model_field');
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
        if (in_array(2, $stepIds)) {
            $options = $this->generateClotheSize($options);
            $options = $this->generateShoeUkSize($options);
            $options = $this->generateShoeEuSize($options);
            $options = $this->generateShoeJpSize($options);
            $options = $this->generateShoeUsMenSize($options);
            $options = $this->generateShoeUsWomenSize($options);
            // todo
            $options['gender'] = TempTable::query()
                ->whereUserId(auth()->user()->id)
                ->whereModelField('gender')
                ->first()->value;
//            dd($op);
        }
        if (in_array(3, $stepIds)) {

        }
        if (in_array(3, $stepIds)) {

        }
        if (in_array(3, $stepIds)) {

        }
        if (in_array(6, $stepIds)) {
            $options['dropzone']['front_photo_drive_license_card'] = "[{&quot;message&quot;:&quot;File uploaded successfully&quot;,&quot;url&quot;:&quot;/uploads/6567335c2ac91.png&quot;,&quot;id&quot;:41,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;6567335c2ac91.png&quot;,&quot;thumbnail&quot;:&quot;/uploads/6567335c2ac91.png&quot;}]";
        }

//        dd($options);
        return $options;
    }

    /**
     * @param array $options
     * @return array
     */
    public function generateClotheSize(array $options): array
    {
        $clothe_sizes = array();
        $i = 0;
        for ($size = 60; $size <= 170; $size += 10) {
            $i++;
            $clothe_sizes[] = $size;
        }
        $clothe_sizes[$i++] = 'XS';
        $clothe_sizes[$i++] = 'S';
        $clothe_sizes[$i++] = 'M';
        $clothe_sizes[$i++] = 'L';
        $clothe_sizes[$i++] = 'XL';
        $clothe_sizes[$i++] = '2XL';
        $clothe_sizes[$i++] = '3XL';
        $clothe_sizes[$i++] = '4XL';
        $clothe_sizes[$i] = 'XL';


//        dd($clothe_sizes);
        foreach ($clothe_sizes as $key => $clothe_size) {
            $options['clothe_size'][$key]['name'] = $clothe_size;
            $options['clothe_size'][$key]['value'] = $clothe_size;
        }
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
    public function generateShoeJpSize(array $options): array
    {
        $jp_sizes = array();
        for ($size = 16; $size <= 50; $size += 0.5) {
            $jp_sizes[] = $size;
        }
//        dd($uk_sizes);
        foreach ($jp_sizes as $key => $eu_size) {
            $options['shoe_jp_size'][$key]['name'] = $eu_size;
            $options['shoe_jp_size'][$key]['value'] = $eu_size;
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
            $us_sizes[] = $size . "C";
        }
        for ($size = 1; $size <= 2; $size += 0.5) {
            $us_sizes[] = $size . "Y";
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
            $us_sizes[] = $size . "C";
        }
        for ($size = 1; $size <= 2; $size += 0.5) {
            $us_sizes[] = $size . "Y";
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

    /**
     * @param int $stepId
     * @return array
     */
    public function getArr(int $stepId): array
    {
        $saved = $this->getOldFormData([$stepId]);
        $saved_text = $this->getOldTextData([$stepId]);
        $saved_json = $this->getOldJsonData([$stepId]);
        $saved_file = $this->getOldFileData([$stepId]);
//        dd($saved);
//        dd($saved_file);
        $options = $this->getOptions([$stepId]);
        $token = session('token');
        $compact = compact('token', 'saved', 'saved_text', 'saved_json', 'saved_file', 'options');
        return $compact;
    }

    /**
     * @return void
     */
    public function getResponseObject(): void
    {
        $response = new \Illuminate\Http\Response('test', 200, array(
            'Cache-Control' => 'max-age=' . '0' . ', public',
            'Content-Length' => strlen('test'),
        ));

        $response->setLastModified(new \DateTime('now'));
        $response->setExpires(\Carbon\Carbon::now()->addMinutes(config('imagecache.lifetime')));
    }
}
