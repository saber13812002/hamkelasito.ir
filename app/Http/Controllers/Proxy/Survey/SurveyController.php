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
        ])->get('https://survey.pardisania.ir/api/v1/campaigns/', [
            'headers' => [
            ]
        ]);

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
}
