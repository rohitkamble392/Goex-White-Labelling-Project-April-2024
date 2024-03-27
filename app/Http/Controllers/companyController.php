<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class companyController extends Controller
{
    public function index()
    {

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetCompanyDetails';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->get($apiEndpoint);
        
        if ($response->successful()) {

            $responseData = $response->json();
            $companyDetails = $responseData;

            // Return the data to the view

            // dd($response);
            return view('pages.all-companies', compact('companyDetails'));
        } else {
            // Handle error response
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function getCompanyEnterprise()
    {

        $data = [
            "companyID"=> Session::get('companyID'),
            "enterpriseJson"=> "string",
            "enterpriseID"=> "LC0447ckpq",
            "qrFile"=> "string",
            "retailerID"=> 0
        ];

                $apiEndpoint = 'https://spillas.in/api/AMA/GetCompany_Enterprise';

                $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

                if ($response->successful()) {

                    $responseData = $response->json();
                    $enterprisedetails = $responseData;
                    // dd($response);
                    return view('pages.getcompany-enterprise', compact('getcompanyenterprise'));
                } else {
                    return response()->json(['error' => 'Failed to fetch data'], $response->status());
                }
    }

    public function addCompany()
    {
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetRoleDetails';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,[
            'userID' => 1,
        ]);

        if ($response->successful()) {
            $responseData = $response->json();
            $roleDetails = $responseData;

            return view('pages.add-company', compact('roleDetails'));
        } else {
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
            'role' => $request->input('role'),
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
            'companyDomain' => 'string',
            'companytoken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MDcyMjcyMDUsImlzcyI6ImFwaWlzc3VlciIsImF1ZCI6ImFwaWF1ZGllbmNlIn0.dfKEoCUgNVson_hN_mJqvdYVirH9ojhLFNeO4E1EZNw',
        ]; 

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/CreateCompany';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
           
            $responseData = $response->json();
            $companytDetails = $responseData;

            return redirect('/manage-company')->with('success', 'Operation completed successfully!');
        
        } else {
            // Handle the error
            return redirect()->back()->with('error', 'Operation not completed successfully!');
        }
    }

    public function createEnterprise(Request $request)
    {
        $data = [
            'EnterpriseID' => $request->input('EnterpriseID'),
            'RetailerID' => $request->input('RetailerID'),
            'jsonfile' => $request->input('jsonfile'),
            'QRfile' => $request->input('QRfile'),
            "companid"=> Session::get('Company_ID'),
        ]; 

        $apiEndpoint = 'https://spillas.in/api/AMA/UploadJson';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
           
            $responseData = $response->json();
            $jsondetails = $responseData;

            dd($response);
            // return redirect('/manage-enterprise')->with('success', 'Operation completed successfully!');
        
        } else {
            // Handle the error
            return redirect()->back()->with('error', 'Operation not completed successfully!');
        }
    }
    

    public function UpdateCompany(Request $request)
    {
        $data = [
            'companyID' => $request->input('companyID'),
            'com_Name' => $request->input('com_Name'),
            'com_Email' => $request->input('com_Email'),
            'com_MobileNo' => $request->input('com_MobileNo'),
            'password' => $request->input('password'),
            'type_Buss' => $request->input('type_Buss'),
            'com_Address' => $request->input('com_Address'),
            'createdBy' => Session::get('userID'),
            'ownerName' => $request->input('ownerName'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'panNo' => $request->input('panNo'),
            'nationality' => $request->input('nationality'),
            'gender' => $request->input('gender'),
            'role' => $request->input('role'),
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
            'companyDomain' => 'string',
            'companytoken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MDcyMjcyMDUsImlzcyI6ImFwaWlzc3VlciIsImF1ZCI6ImFwaWF1ZGllbmNlIn0.dfKEoCUgNVson_hN_mJqvdYVirH9ojhLFNeO4E1EZNw',
        ];

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/UpdateCompany';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);


        if ($response->successful()) {
            $responseData = $response->json();
            $companyDetails = $responseData;

            return redirect()->back()->with('success', 'Operation completed successfully!');
        
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
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/AutoSearchCompany';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json()['Result'][0];
            $company = $responseData;

            return view('pages.edit-company', compact('company'));
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function delete($userid,$id)
    {
        $data = [
            'userID' => $userid,
            'id' => $id,
            'statusId' => 0
        ];

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/DeleteCompany';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json();
            $companyDetails = $responseData;

            return redirect('/manage-company')->with('success', 'Operation completed successfully!');
        } else {
            return $response->json();
        }
    }
}
