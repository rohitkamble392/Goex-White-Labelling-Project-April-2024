<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class distributorController extends Controller
{
    public function index()
    {

        $data = [
            'userID'=>0,
            'compID'=>0
        ];
                // return view('pages.all-employees');

                $apiEndpoint = 'http://api.spillas.in/api/UserRegistration/GetDistributorDetails';

                
                // Make a GET request to the API
                $response = Http::post($apiEndpoint,$data);
        
                // Check if the request was successful
                if ($response->successful()) {
                    $distributorDetails = $response->json();
        
                    // Return the data to the view
                    return view('pages.all-distributors', compact('distributorDetails'));
                } else {
                    // Handle error response
                    return response()->json(['error' => 'Failed to fetch data'], $response->status());
                }
    }

    public function addDistributor()
    {
        return view('pages.add-distributor');

    }

    public function CreateDistributor(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'mobileNo' => $request->input('mobileNo'),
            'password' => $request->input('password'),
            'aadhar_No' => '43243253',
            'remarks' => 'testing',
            'created_by' => 1,
            'senior_id' => 1,
            'role' => 2,
            'state' => $request->input('state'),
            'pincode' => $request->input('pincode'),
            'district' => $request->input('district'),
        ];

        $response = Http::post('http://api.spillas.in/api/UserRegistration/CreateDistributor', $data);

        if ($response->successful()) {
            $responseData = $response->json();
            // Process the response data as needed
            // return response()->json(['message' => 'Distributor created successfully', 'data' => $responseData], 201);
            return redirect('/manage-distributor')->with('success', 'Operation completed successfully!');
        } else {
            // Handle the error
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

        // Prepare the data for the POST request
        // $data = $request->all();

        // Make the POST request to the API
        $response = Http::post('http://api.spillas.in/api/UserRegistration/DeleteDistributor', $data);

        // Check the response and handle it accordingly
        if ($response->successful()) {
            $responseData = $response->json();
            // Process the response data as needed
            // return response()->json(['message' => 'Company deleted successfully', 'data' => $responseData], 201);
            return redirect('/manage-distributor')->with('success', 'Operation completed successfully!');
        } else {
            // Handle the error
            return $response->json();
        }
    }
}
