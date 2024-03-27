<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    public function index()
    {

        $data = [
            "companyID"=> 0,
            "enterpriseJson"=> "string",
            "enterpriseID"=> "LC0447ckpq",
            "qrFile"=> "string",
            "retailerID"=> 28
        ];

                $apiEndpoint = 'https://spillas.in/api/AMA/GetEnterprise_Details';

                
                $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

                if ($response->successful()) {

                    $responseData = $response->json();
                    $enterprisedetails = $responseData;
                    // dd($response);
                    return view('pages.all-enterprise', compact('enterprisedetails'));
                } else {
                    return response()->json(['error' => 'Failed to fetch data'], $response->status());
                }
    }
}
