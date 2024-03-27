<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class CountController extends Controller
{
    
    public function getCompanytCount()
    {    
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetCompanyDetails';
        $bearerToken = session('Token');
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint);
        
        if ($response->successful()) {
            $responseData = $response->json();
            $companyDetails = $responseData['Result'];
            $recordCount = count($companyDetails);
            
            return response()->json(['count' => $recordCount]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function getSuperStockistCount()
    {
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=> Session::get('Company_ID'),
            // "compID"=> 366,
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
            $superstokistDetails = $responseData['Result'];
            $recordCount = count($superstokistDetails);
            
            return response()->json(['count' => $recordCount]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function getDistributorCount()
    {
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=> Session::get('Company_ID'),
            // "compID"=> 366,
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
            $distributorDetails = $responseData['Result'];
            $recordCount = count($distributorDetails);
            
            return response()->json(['count' => $recordCount]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function getEmployeeCount()
    {
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=> Session::get('Company_ID'),
            // "compID"=> 366,
            "roleID"=> 11,
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
            $employeeDetails = $responseData['Result'];
            $recordCount = count($employeeDetails);
            
            return response()->json(['count' => $recordCount]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function getRetailerCount()
    {
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=> Session::get('Company_ID'),
            // "compID"=> 366,
            "roleID"=> 12,
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
            $retailerDetails = $responseData['Result'];
            $recordCount = count($retailerDetails);
            
            return response()->json(['count' => $recordCount]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function getPromoterCount()
    {
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=> Session::get('Company_ID'),
            // "compID"=> 366,
            "roleID"=> 13,
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
            $promoterDetails = $responseData['Result'];
            $recordCount = count($promoterDetails);
            
            return response()->json(['count' => $recordCount]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function getCustomerCount()
    {
        $data = [  
            "userID"=> 0,
            "fromdate"=> "2024-02-14T10:23:30.333Z",
            "todate"=> "2024-02-14T10:23:30.334Z",
            "compID"=> Session::get('Company_ID'),
            // "compID"=> 366,
            "roleID"=> 0,
            "seniorID"=> 0,
        ];
    
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetCustomerDetails';
        $bearerToken = session('Token');
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint, $data);
        
        if ($response->successful()) {
            $responseData = $response->json();
            $customerDetails = $responseData['Result'];
            $recordCount = count($customerDetails);
            
            return response()->json(['count' => $recordCount]);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
}
