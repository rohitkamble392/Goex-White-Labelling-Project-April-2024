<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class amaDeviceController extends Controller
{
    public function index()
    {
        // return view('pages.ama-customers');

        $data = [  
            "amA_ENTERPRISE_ID"=> 'LC036bfjya',
        ];
        $apiEndpoint = 'https://spillas.in/api/AMA/GetAMADevice';

        
        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint, $data);
        
                if ($response->successful()) {
                    $responseData = $response->json();
                    $deviceDetails = $responseData;
                    // dd($response);
                    return view('pages.ama-customers', compact('deviceDetails'));
                } else {
                    return response()->json(['error' => 'Failed to fetch data'], $response->status());
                }
    }
    
}
