<?php

namespace App\Http\Controllers;
use App\Http\Controllers\TicketReasonController;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class TicketReasonController extends Controller
{
    public function index()
    {
        $data = [
            'userId' => 1,
            'flag' =>""
        ];

        $apiEndpoint = 'https://spillas.in/api/Incident/GetTicketReason';

        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->get($apiEndpoint,$data);

        if ($response->successful()) {

            $reasons = $response->json();

            return view('pages.all-ticket-reason', compact('reasons'));
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
    public function addTicketReasonView()
    {
        return view('pages.add-ticket-reason');
    }

    public function createTicketReason(Request $request)
    {
        $data = [
            'ticketReason' => $request->input('name'),
            'id'=>0,
            'createdBy' => 1
        ];

        $apiEndpoint = 'https://spillas.in/api/Incident/CreateTicketReason';

        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json();
            return redirect('/all-ticket-reasons')->with('success', 'Operation completed successfully!');
        } else {
            // Handle the error
            return $response->json();
        }
    }

    public function delete($id)
    {
        $data = [
            'userID' => $id,
            'id' => $id,
            'statusId' => 0
        ];
        $apiEndpoint = 'https://spillas.in/api​/Incident​/DeleteTicketReason';

        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json();

            return redirect('/all-ticket-reason')->with('success', 'Operation completed successfully!');
        } else {
            return $response->json();
        }
    }
    
}