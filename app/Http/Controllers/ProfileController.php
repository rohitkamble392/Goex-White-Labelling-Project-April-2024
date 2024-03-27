<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Http;
class ProfileController extends Controller
{
    public function profile()
    {
        $checkID = Session::get('roleName');
        $apiEndpoint = '';

        if ($checkID === 2) {
            $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetCompanyDetails';
        } elseif ($checkID === 9) {
            $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetSuperStockistDetails';
        } elseif ($checkID === 10) {
            $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetDistributorDetails';
        } elseif ($checkID === 11) {
            $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetEmployeeDetails';
        } elseif ($checkID === 12) {
            $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetSuperRetailerDetails';
        } elseif ($checkID === 13) {
            $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetPromoterDetails';
        } 

        if (empty($apiEndpoint)) {
            return response()->json(['error' => 'Invalid user ID'], 400);
        }

        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint, ['Role' => $checkID]); // Pass the user ID as an array

        if ($response->successful()) {
            $responseData = $response->json();
            $profiledetails = $responseData;
            return view('pages.profile', compact('profiledetails'));
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
}


