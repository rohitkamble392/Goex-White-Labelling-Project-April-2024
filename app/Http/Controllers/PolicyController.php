<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class PolicyController extends Controller
{
    public function index2()
    {
        $apiEndpoint = 'https://spillas.in/api/AMA/DatabasePolicyList';

        $bearerToken = config('services.api.bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->get($apiEndpoint);

        if ($response->successful()) {
            $policyname = $response->json();
            // dd($response);
            return view('pages.edit-ama-customer', compact('policyname'));
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
}

