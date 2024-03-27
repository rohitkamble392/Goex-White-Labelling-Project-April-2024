<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class userListController extends Controller
{
    public function getSuperStockistList(Request $request)
    {

        $companyId =$request->input('companyId');
        $cId;
        if($companyId)
        {
            $cId = $companyId;
        }
        else
        {
           $cId = session('Company_ID');
        }
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=> $cId,
            "roleID"=> 9,
            "seniorID"=> 0,
        ];
    
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetSuperStockistDetails';
        $bearerToken = session('Token');
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint, $data);
        
        if ($response->successful()) {
            $responseData = $response->json();
            $data = $responseData['Result'];
            
            return response()->json(['data' => $data]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function getDistributorList()
    {
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=>366, // add company id from session here
            "roleID"=> 10,
            "seniorID"=> 0,
        ];
    
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetDistributorDetails';
        $bearerToken = session('Token');
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint, $data);
        
        if ($response->successful()) {
            $responseData = $response->json();
            $data = $responseData['Result'];
            
            return response()->json(['data' => $data]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
    public function getEmployeeList()
    {
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=>366, // add company id from session here
            "roleID"=> 10,
            "seniorID"=> 0,
        ];
    
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetEmployeeDetails';
        $bearerToken = session('Token');
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint, $data);
        
        if ($response->successful()) {
            $responseData = $response->json();
            $data = $responseData['Result'];
            
            return response()->json(['data' => $data]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
    public function getRetailerList()
    {
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=>366, // add company id from session here
            "roleID"=> 10,
            "seniorID"=> 0,
        ];
    
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetSuperRetailerDetails';
        $bearerToken = session('Token');
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint, $data);
        
        if ($response->successful()) {
            $responseData = $response->json();
            $data = $responseData['Result'];
            
            return response()->json(['data' => $data]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
    public function getPromoterList()
    {
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=>366, // add company id from session here
            "roleID"=> 10,
            "seniorID"=> 0,
        ];
    
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetPromoterDetails';
        $bearerToken = session('Token');
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint, $data);
        
        if ($response->successful()) {
            $responseData = $response->json();
            $data = $responseData['Result'];
            
            return response()->json(['data' => $data]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
    public function getCompanyList()
    {
       
    
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetCompanyDetails';
        $bearerToken = session('Token');
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->get($apiEndpoint);
        
        if ($response->successful()) {
            $responseData = $response->json();
            $data = $responseData['Result'];
            
            return response()->json(['data' => $data]);
        } else {
            return response()->json(['error' => 'Failed to fetch 88'], $response->status());
        }
    }

    //table data
}
