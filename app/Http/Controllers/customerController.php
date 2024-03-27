<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class customerController extends Controller
{
public function index()
    {
        $data = [
            "reatilerID"=> 404,
            "fromdate"=> "2024-02-18T09:32:32.684Z",
            "todate"=> "2024-02-18T09:32:32.684Z",
            "compID"=> 0,
            "roleID"=> 0,
            "promotorID"=> 405,
            "seniorID"=> 405

            // "reatilerID": 404,
            // "fromdate": "2024-03-24T12:50:37.809Z",
            // "todate": "2024-03-24T12:50:37.809Z",
            // "compID": 0,
            // "roleID": 0,
            // "promotorID": 405,
            // "seniorID": 405

            // "reatilerID"=> Session::get('Senior_ID'),
            // "fromdate"=> "2024-02-18T09:32:32.684Z",
            // "todate"=> "2024-02-18T09:32:32.684Z",
            // "compID"=> Session::get('Company_ID'),
            // "roleID"=> 0,
            // "promotorID"=> Session::get('UserID'),
            // "seniorID"=> Session::get('Senior_ID')
        ];
                $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetCustomerDetails';
                
                // Make a GET request to the API
                $bearerToken = session('Token');

                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $bearerToken,
                    'Accept' => '*/*'
                ])->post($apiEndpoint,$data);
        
                // Check if the request was successful
                if ($response->successful()) {
                    $responseData = $response->json();

                    $customerDetails = $responseData;
                    // dd($response);
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
            'created_by' => Session::get('UserID'),
            'model' => $request->input('model'),
            'brand' => $request->input('brand'),
            'imeNumber' => $request->input('imeNumber'),
            'imeNumber1' => $request->input('imeNumber1'),
            'serial_No' => $request->input('serial_No'),
            'emI_Tenure' => $request->input('emI_Tenure'),
            'device_ID' => 1,
            'emI_Amount' => $request->input('emI_Amount'),
            'emI_Date' => $request->input('emI_Date'),
            'down_Payment' => $request->input('down_Payment'),
            'finaciar_id' => $request->input('finaciar_id'),
            'deviceAmt' => $request->input('deviceAmt'),
            'senior_ID'=> Session::get('Senior_ID'),
            'company_ID' => Session::get('Company_ID'),
            'retailerID'=> Session::get('Senior_ID'),
            'companyDomain' => 'string',
            'companytoken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MDgzNDc1MDksImlzcyI6ImFwaWlzc3VlciIsImF1ZCI6ImFwaWF1ZGllbmNlIn0.E6TrSnGQ-do-yUqAhs5qLJudesMlnOQusxGBP6FkXUM',
        ];

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/CreateCustomer';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response) {
            $responseData = $response->json();
            $customerDetails = $responseData;
            // dd($response);
            return redirect('/manage-customer')->with('success', 'Operation completed successfully!');
            
        } else {
            // Handle the error
            return redirect('/manage-customer')->with('error', 'Operation failed!');

        }
    }

    public function updateCustomer(Request $request)
    {
        $data = [
            'custID' => $request->input('CustID'),
            'cust_Name' => $request->input('cust_Name'),
            'cust_Email' => $request->input('cust_Email'),
            'cust_MobileNo' => $request->input('cust_MobileNo'),
            'remarks' => $request->input('remarks'),
            'created_by' => Session::get('UserID'),
            'model' => $request->input('model'),
            'brand' => $request->input('brand'),
            'imeNumber' => $request->input('imeNumber'),
            'imeNumber1' => $request->input('imeNumber1'),
            'serial_No' => $request->input('serial_No'),
            'emI_Tenure' => $request->input('emI_Tenure'),
            'device_ID' => 1,
            'emI_Amount' => $request->input('emI_Amount'),
            'emI_Date' => $request->input('emI_Date'),
            'down_Payment' => $request->input('down_Payment'),
            'finaciar_id' => $request->input('finaciar_id'),
            'deviceAmt' => $request->input('deviceAmt'),
            'senior_ID'=> Session::get('Senior_ID'),
            'retailerID'=> Session::get('Senior_ID'),
            'company_ID'=> Session::get('Company_ID'),
            'companyDomain' => 'string',
            'companytoken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MDgzNDc1MDksImlzcyI6ImFwaWlzc3VlciIsImF1ZCI6ImFwaWF1ZGllbmNlIn0.E6TrSnGQ-do-yUqAhs5qLJudesMlnOQusxGBP6FkXUM',
        ];

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/UpdateCustomer';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            // return $response->json();
            $responseData = $response->json();
            $customerDetails = $responseData;
            // dd($response);
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

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/DeleteCustomer';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json();
            $customerDetails = $responseData;

            return redirect('/manage-customer')->with('success', 'Operation completed successfully!');
        } else {
            // Handle the error
            return $response->json();
        }
    }

    public function edit($mobile)
    {
        $data = [
            'searchValue' => $mobile,
            'userId' => 0,
        ];
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/AutoSearchCustomer';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json()['Result'][0];
            $customer = $responseData;

            return view('pages.edit-customer', compact('customer'));
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
}
