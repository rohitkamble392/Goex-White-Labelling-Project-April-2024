<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class PromoterController extends Controller
{
    public function index()
    {

        $data = [
            // "userID"=> 0,
            // "fromdate"=> "2024-02-18T08:32:58.834Z",
            // "todate"=> "2024-02-18T08:32:58.834Z",
            // "compID"=> 217,
            // "roleID"=> 13,
            // "seniorID"=> 0

            "userID"=> Session::get('UserID'),
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=> Session::get('Company_ID'),
            "roleID"=> 13,
            "seniorID"=> Session::get('Senior_ID'),
        ];

                $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetPromoterDetails';

                $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);
        
                if ($response->successful()) {
                    $promoterDetails = $response->json();
        
                    return view('pages.all-promoters', compact('promoterDetails'));
                } else {
                    return response()->json(['error' => 'Failed to fetch data'], $response->status());
                }
    }



    public function addPromoter()
    {
        return view('pages.add-promoter');

    }
    public function createPromoter(Request $request)
    {
        $data = [
            'shop_Name' => $request->input('shop_Name'),
            'contactPer_Name' => $request->input('contactPer_Name'),
            'address' => $request->input('address'),
            'pincode' => $request->input('pincode'),
            'location' => 'drgfjhkl',
            'state_id' => $request->input('state_id'),
            'district' => $request->input('district'),
            'email' => $request->input('email'),
            'mobileNo' => $request->input('mobileNo'),
            'password' => $request->input('password'),
            'gsT_No' => $request->input('gsT_No'),
            'aadhar_No' => $request->input('aadhar_No'),
            'paN_No' => $request->input('paN_No'),
            'display_No' => 'fasdfsafsda',
            'display_ContactName' => 'fgdsgsdfgdfs',
            'payment_No' => $request->input('payment_No'),
            'upI_No' => $request->input('upI_No'),
            'is_Zero' => $request->input('is_Zero'),
            'remarks' => 'ggfdgfd',
            'created_by' => Session::get('UserID'),
            'senior_id' => Session::get('UserID'),
            'company_ID' => Session::get('Company_ID'),
            'role' => 13,
            'companyDomain' => 'string',
            'companytoken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MDgzNzAzNjYsImlzcyI6ImFwaWlzc3VlciIsImF1ZCI6ImFwaWF1ZGllbmNlIn0.85NRtNzVx_SyQS6ytyiQwqNPICAv7QMHrkiEPd-I1gw',
        ];

        

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/CreatePromoter';

        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response) {
            return $response->json();
            $responseData = $response->json();
            $promoterDetails = $responseData;

            return redirect('/manage-promoters')->with('success', 'Operation completed successfully!');

        } else {
            return $response->json();
        }
    }

    public function delete($userid,$id)
    {
        $data = [
            'userID' => $userid,
            'id' => $id,
            'statusId' => 0
        ];


        $apiEndpoint = config('services.api.api_domain').'/api/UserRegistration/DeletePromoter';
        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json();
            $promoterDetails = $responseData;

            return redirect('/manage-promoters')->with('success', 'Operation completed successfully!');
        } else {
            // Handle the error
            return $response->json();
        }
    }
}