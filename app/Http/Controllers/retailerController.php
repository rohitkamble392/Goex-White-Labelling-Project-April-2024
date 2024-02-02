<?php

namespace App\Http\Controllers;
use App\Http\Requests\RetailerRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DataTables;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class RetailerController extends Controller
{
    public function index()
    {

        $data = [
            'userID'=>0,
            'compID'=>0
        ];
                // return view('pages.all-employees');

                $apiEndpoint = 'http://api.spillas.in/api/UserRegistration/GetSuperRetailerDetails';

                
                // Make a GET request to the API
                $response = Http::post($apiEndpoint,$data);
        
                // Check if the request was successful
                if ($response->successful()) {
                    $retailerDetails = $response->json();
        
                    // Return the data to the view
                    return view('pages.all-retailers', compact('retailerDetails'));
                } else {
                    // Handle error response
                    return response()->json(['error' => 'Failed to fetch data'], $response->status());
                }
    }

    public function addRetailer()
    {
        return view('pages.add-retailer');

    }

    public function CreateRetailer(Request $request)
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
            'created_by' => 1,
            'senior_id' => 5,
            'role' => 6
          
        ];

        // Prepare the data for the POST request
        // $data = $request->all();

        // Make the POST request to the API
        $response = Http::post('http://api.spillas.in/api/UserRegistration/CreateRetailer', $data);

        // Check the response and handle it accordingly
        if ($response->successful()) {
            $responseData = $response->json();
            // Process the response data as needed
            // return response()->json(['message' => 'Retailer created successfully', 'data' => $responseData], 201);
            return redirect('/manage-retailer')->with('success', 'Operation completed successfully!');
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
        $response = Http::post('http://api.spillas.in/api/UserRegistration/DeleteRetailer', $data);

        // Check the response and handle it accordingly
        if ($response->successful()) {
            $responseData = $response->json();
            // Process the response data as needed
            // return response()->json(['message' => 'Company deleted successfully', 'data' => $responseData], 201);
            return redirect('/manage-retailer')->with('success', 'Operation completed successfully!');
        } else {
            // Handle the error
            return $response->json();
        }
    }
}
