<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class companyController extends Controller
{
    public function index()
    {
        // return view('pages.add-company');

        $apiEndpoint = 'http://api.spillas.in/api/UserRegistration/GetCompanyDetails';

        // Make a GET request to the API
        $response = Http::get($apiEndpoint);

        // Check if the request was successful
        if ($response->successful()) {
            $companyDetails = $response->json();

            // Return the data to the view
            return view('pages.all-companies', compact('companyDetails'));
        } else {
            // Handle error response
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function createCompany(Request $request)
    {
        $data = [
            'com_Name' => $request->input('com_Name'),
            'com_Email' => $request->input('com_Email'),
            'com_MobileNo' => $request->input('com_MobileNo'),
            'password' => $request->input('password'),
            'type_Buss' => $request->input('type_Buss'),
            'com_Address' => $request->input('com_Address'),
            'createdBy' => 1,
            'ownerName' => $request->input('ownerName'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'panNo' => $request->input('panNo'),
            'nationality' => $request->input('nationality'),
            'gender' => $request->input('gender'),
            'role' => 2,
            'fileUploadURL' => $request->input('fileUploadURL'),
            'autoziedName' => $request->input('autoziedName'),
            'pincode' => $request->input('pincode'),
            'state' => $request->input('state'),
            'district' => $request->input('district'),
            'typeofCom' => $request->input('typeofCom'),
            'gstno' => $request->input('gstno'),
            'webSiteURL' => $request->input('webSiteURL'),
            'uploadLogo' => $request->input('uploadLogo'),
            'gsT_URL' => $request->input('gsT_URL'),
            'companno' => $request->input('companno'),
            'compannO_URL' => $request->input('compannO_URL'),
            'authPANNO_URL' => $request->input('authPANNO_URL'),
            'authPANNO' => $request->input('authPANNO'),
            'cinno' => $request->input('cinno'),
            'cinnO_URL' => $request->input('cinnO_URL'),
            'subdoM1' => $request->input('subdoM1'),
            'subdoM2' => $request->input('subdoM2'),
            'subdoM3' => $request->input('subdoM3'),
            'enterPrise_ID' => $request->input('enterPrise_ID'),
            'pannO_URL' => $request->input('pannO_URL'),
            'aadharCard_URL' => $request->input('aadharCard_URL'),
            'aadharCardNO' => $request->input('aadharCardNO'),
            'companyDomain' => 'www.abc.com',
            'companytoken' => 'jfkdls94854jfkdsf',
        ];

        // Prepare the data for the POST request
        // $data = $request->all();

        // Make the POST request to the API
        $response = Http::post('http://api.spillas.in/api/UserRegistration/CreateCompany', $data);

        // Check the response and handle it accordingly
        if ($response->successful()) {
            $responseData = $response->json();
            // Process the response data as needed
            // return response()->json(['message' => 'Company created successfully', 'data' => $responseData], 201);
            return redirect()->back()->with('success', 'Operation completed successfully!');
        
        } else {
            // Handle the error
            return $response->json();
        }
    }

    public function edit(Request $request, $company)
    {
        return $request;
     //   return view('pages.edit-company',compact('company'));
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
        $response = Http::post('http://api.spillas.in/api/UserRegistration/DeleteCompany', $data);

        // Check the response and handle it accordingly
        if ($response->successful()) {
            $responseData = $response->json();
            // Process the response data as needed
            // return response()->json(['message' => 'Company deleted successfully', 'data' => $responseData], 201);
            return redirect('/manage-company')->with('success', 'Operation completed successfully!');
        } else {
            // Handle the error
            return $response->json();
        }
    }
}
