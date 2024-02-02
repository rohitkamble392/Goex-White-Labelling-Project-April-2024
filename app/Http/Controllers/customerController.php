<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class customerController extends Controller
{
    public function index()
    {

        $data = [
            'userID'=>0,
            'compID'=>0
        ];

                $apiEndpoint = 'http://api.spillas.in/api/UserRegistration/GetCustomerDetails';

                
                // Make a GET request to the API
                $response = Http::post($apiEndpoint,$data);
        
                // Check if the request was successful
                if ($response->successful()) {
                    $customerDetails = $response->json();
        
                    // Return the data to the view
                    return view('pages.all-customers', compact('customerDetails'));
                } else {
                    // Handle error response
                    return response()->json(['error' => 'Failed to fetch data'], $response->status());
                }
    }

    public function addCustomer()
    {
        return view('pages.register-customer');

    }

    public function CreateCustomer(Request $request)
    {
        $data = [
            'cust_Name' => $request->input('cust_Name'),
            'cust_Email' => $request->input('cust_Email'),
            'cust_MobileNo' => $request->input('cust_MobileNo'),
            'remarks' => $request->input('remarks'),
            'created_by' => 1,
            'model' => $request->input('model'),
            'brand' => $request->input('brand'),
            'imeNumber' => $request->input('imeNumber'),
            'imeNumber1' => $request->input('imeNumber1'),
            'serial_No' => $request->input('serial_No'),
            'emI_Tenure' => $request->input('emI_Tenure'),
            'device_ID' => $request->input('device_ID'),
            'emI_Amount' => $request->input('emI_Amount'),
            'emI_Date' => $request->input('emI_Date'),
            'down_Payment' => $request->input('down_Payment'),
            'finaciar_id' => $request->input('finaciar_id'),
            'deviceAmt' => $request->input('deviceAmt')
        ];

        // Prepare the data for the POST request
        // $data = $request->all();

        // Make the POST request to the API
        $response = Http::post('http://api.spillas.in/api/UserRegistration/CreateCustomer', $data);

        // Check the response and handle it accordingly
        if ($response->successful()) {
            $responseData = $response->json();
            // Process the response data as needed
            // return response()->json(['message' => 'Customer created successfully', 'data' => $responseData], 201);
            return redirect('/manage-customer')->with('success', 'Operation completed successfully!');
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
        $response = Http::post('http://api.spillas.in/api/UserRegistration/DeleteCustomer', $data);

        // Check the response and handle it accordingly
        if ($response->successful()) {
            $responseData = $response->json();
            // Process the response data as needed
            // return response()->json(['message' => 'Company deleted successfully', 'data' => $responseData], 201);
            return redirect('/manage-customer')->with('success', 'Operation completed successfully!');
        } else {
            // Handle the error
            return $response->json();
        }
    }
}
