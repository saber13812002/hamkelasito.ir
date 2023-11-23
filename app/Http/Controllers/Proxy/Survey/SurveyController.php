<?php

namespace App\Http\Controllers\Proxy\Survey;

use Illuminate\Support\Facades\Http;


class SurveyController
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withHeaders([
            'X-Proxy-Token' => config('proxy.PROXY_TOKENS'),
            'Content-Type' => 'application/json',
            'app_id' => 0
        ])->get('https://survey.pardisania.ir/api/v1/campaigns/');

        if ($response->successful()) {
            $data = $response->json();
            // Process the data
            $items = collect($data['data']['items']);
//            dd($items[0]['id']);
            return view('admin.survey.index', compact('items'));
        } else {
            // Handle the error

        }

    }

    public function packages()
    {

        $response = Http::withHeaders([
            'X-Proxy-Token' => config('proxy.PROXY_TOKENS'),
            'Content-Type' => 'application/json',
            'app_id' => 0
        ])->get('https://survey.pardisania.ir/api/v1/packages/');

        if ($response->successful()) {
            $data = $response->json();
            // Process the data
            $items = collect($data['data']['items']);
//            dd($items[0]['id']);
            return view('admin.survey.packages', compact('items'));
        } else {
            // Handle the error
        }
    }

    public function questions(int $packageId)
    {
//        dd($packageId);
        $response = Http::withHeaders([
            'X-Proxy-Token' => config('proxy.PROXY_TOKENS'),
            'Content-Type' => 'application/json',
            'app_id' => 0
        ])->get('https://survey.pardisania.ir/api/v1/packages/' . $packageId . '/questions/');

//        dd($response);
        if ($response->successful()) {
            $data = $response->json();
//            dd($data);
            // Process the data
            $items = collect($data['data']);
//            dd($items[0]['id']);
            return view('admin.survey.questions', compact('items'));
        } else {
            // Handle the error
        }
    }


    public function choices(int $questionId)
    {
//        dd($packageId);
        $response = Http::withHeaders([
            'X-Proxy-Token' => config('proxy.PROXY_TOKENS'),
            'Content-Type' => 'application/json',
            'app_id' => 0
        ])->get('https://survey.pardisania.ir/api/v1/questions/' . $questionId . '/choices/');

//        dd($response);
        if ($response->successful()) {
            $data = $response->json();
//            dd($data);
            // Process the data
            $items = collect($data['data']['items']);
//            dd($items[0]['id']);
            return view('admin.survey.choices', compact('items'));
        } else {
            // Handle the error
        }
    }

}
