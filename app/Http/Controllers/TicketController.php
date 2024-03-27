<?php

namespace App\Http\Controllers;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $data = [
            'userId' => 1,
            'flag' =>""
        ];
        $apiEndpoint = 'https://spillas.in/api/Incident/GetTicketList';
        
        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $tickets = $response->json();
            return view('pages.all-tickets', compact('tickets'));
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
    public function raiseTicketView()
    {
        $data = [
            'ID' => 1,
        ];
        $apiEndpoint = 'https://spillas.in/api/Incident/GetTicketReason';

        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->get($apiEndpoint,$data);

        if ($response->successful()) {
            $ticketReason = $response->json();
            return view('pages.raise-ticket', compact('ticketReason'));
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
    
    public function autosearchretailer(Request $request)
    {

        $searchValue = $request->input('searchValue');
        $data =[
            'searchValue' => $searchValue,
            'userID' => 1
        ];
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/AutoSearchRetailer';

        $bearerToken = config('services.api.bearer_token');

        

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

            if ($response->successful()) {
            $details = $response->json();
                return $details;
        } else {
            return response()->json(['error' => $searchValue]);
        }
    }
    public function autosearchcustomer(Request $request)
    {
        $searchValue = $request->input('searchValue');
        $data = [
            'searchValue' => $searchValue,
            'userID' => 0
        ];
        $apiEndpoint = 'https://spillas.in/api/UserRegistration/AutoSearchCustomer';

        $bearerToken = config('services.api.bearer_token');


        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);


            if ($response->successful()) {
            $details = $response->json();
                return $details;
        } else {
            return response()->json(['error' => $searchValue]);
        }
    }

    public function createTicket(Request $request)
    {
        $data = [
            'ticketReason' => $request->input('ticketReason'),
            'comment' => $request->input('comment'),
            'assignTO' => $request->input('assignTO'),
            'task_id' => $request->input('task_id'),
            'status' => 0,
            'created_by' => 1
        ];

        $apiEndpoint = 'https://spillas.in/api​/Incident​/RaiseTicket';

        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json();
            $ticketDetails = $responseData;
            return redirect('/all-tickets')->with('success', 'Operation completed successfully!');
        } else {
            // Handle the error
            return $response->json();
        }
    }    
}