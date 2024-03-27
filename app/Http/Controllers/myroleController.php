<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class myroleController extends Controller
{
    public function index()
    {

        $data = [
            'userID' => 1,
        ];

        $apiEndpoint = 'https://spillas.in/api/UserRegistration/GetRoleDetails';

        // Make a GET request to the API
        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        // Check if the request was successful
        if ($response->successful()) {
            $roleDetails = $response->json();

            // Return the data to the view
            return view('pages.manage-user', compact('roleDetails'));
        } else {
            // Handle error response
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function createrole(Request $request)
    {

        $data = [
            'roleID' => 1,
            'roleName' => $request->input('roleName'),
            'reporting_TO' => $request->input('reporting_to'),
            'isActive' => $request->input('isActive'),
            'createdBy' => $request->input('createdBy'),
        ];
        
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/CreateRole';

        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

// Check the response status and handle accordingly
if ($response->successful()) {
    // Request was successful (status code 2xx)
    $responseData = $response->json();

    // Check if the API request was successful
    if ($responseData['IsSuccess']) {
        $message = $responseData['Message'];
        // Process the success message as needed
        return redirect('/manage-role')->with('success', 'Operation completed successfully!');
        // echo $message;
    } else {
        // Handle the case where the API request was successful, but the response indicates an error
        $errorMessage = $responseData['Message'];
        // Handle or log the error message
        echo "Error: $errorMessage";
    }
} else {
    // Request failed (status code not 2xx)
    return $errorResponse = $response->json();
    // Handle the error, log, or throw an exception
 //   echo "Error: Something went wrong with the API request.";
}
    }
}
