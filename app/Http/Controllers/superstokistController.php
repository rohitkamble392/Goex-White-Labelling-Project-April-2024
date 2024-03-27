<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class superstokistController extends Controller
{
    public function index()
    {
        $data = [  
            "userID"=> Session::get('UserID'),
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=> Session::get('Company_ID'),
            "roleID"=> 9,
            "seniorID"=> Session::get('Senior_ID'),
        ];
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetSuperStockistDetails';

        
        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint, $data);
        
                if ($response->successful()) {
                    $responseData = $response->json();
                    $superstokistDetails = $responseData;
        
                    return view('pages.all-superstokist', compact('superstokistDetails'));
                } else {
                    return response()->json(['error' => 'Failed to fetch data'], $response->status());
                }
    }

    public function addSuperStokist()
    {
        return view('pages.add-superstokist');
    }

    public function CreateSuperStokist(Request $request)
    {
      
        $data = [
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'mobileNo' => $request->input('mobileNo'),
            'password' => $request->input('password'),
            'aadhar_No' => '765123765987',
            'remarks' => 'testing',
            'created_by' => Session::get('UserID'),
            "senior_id"=> Session::get('UserID'),
            'role' => 9,
            'state' => $request->input('state'),
            'pincode' => $request->input('pincode'),
            'district' => $request->input('district'),
            'companyDomain' => 'string',
            'companytoken' =>"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MDgzNzAzNjYsImlzcyI6ImFwaWlzc3VlciIsImF1ZCI6ImFwaWF1ZGllbmNlIn0.85NRtNzVx_SyQS6ytyiQwqNPICAv7QMHrkiEPd-I1gw",
            'company_ID' => Session::get('Company_ID'),
        ];
        
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/CreateSuperStockist';

       $bearerToken = session('Token');
        // $bearerToken = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MDgzNDc1NDEsImlzcyI6ImFwaWlzc3VlciIsImF1ZCI6ImFwaWF1ZGllbmNlIn0.a7jEGNbR4Ig8tADwIukJa4cDsp6tVejOqzzmfbpnrhI";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response) {
            $responseData = $response->json();
            $superstokistDetails = $responseData;
            // dd($response);
            // return redirect('/manage-superstokist')->with('success', 'Operation completed successfully!');
            return redirect('/manage-superstokist')->with('success', 'Operation completed successfully!');
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
        
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/DeleteSuperStockist';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json();
            $superstokistDetails = $responseData;

            return redirect('/manage-superstokist');
        } else {
            return $response->json();
        }
    }

    public function edit($mobile)
    {
        $data = [
            'searchValue' => $mobile,
            'userId' => 0,
        ];

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/AutoSearchSuperStockist';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            // return $response->json()['Result'][0];
            $responseData = $response->json()['Result'][0];
            $superstokist = $responseData;

            return view('pages.edit-superstokist', compact('superstokist'));
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function updateSuperStokist(Request $request)
    {
        $data = [
            'ID' => $request->input('ID'),
            'Name' => $request->input('name'),
            'Address' => $request->input('address'),
            'Email' => $request->input('email'),
            'MobileNo' => $request->input('mobileNo'),
            'password' => $request->input('password'),
            'Aadhar_No' => '43243253',
            'Remarks' => 'testing',
            'Created_by' => Session::get('UserID'),
            'Senior_id' => Session::get('UserID'),
            'company_ID' => Session::get('Company_ID'),
            'Pincode' => $request->input('pincode'),
            'State' => $request->input('state'),
            'District' => $request->input('district'),
            'companyDomain' => 'string',
            'companytoken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MDgzNzAzNjYsImlzcyI6ImFwaWlzc3VlciIsImF1ZCI6ImFwaWF1ZGllbmNlIn0.85NRtNzVx_SyQS6ytyiQwqNPICAv7QMHrkiEPd-I1gw',
        ];

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/UpdateSuperStockist';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json();
            $superstokistDetails = $responseData;

            return redirect('/manage-superstokist')->with('success', 'Operation completed successfully!');
        } else {
            return $response->json();
        }
    }
}
