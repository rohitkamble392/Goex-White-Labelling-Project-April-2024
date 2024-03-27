<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class OrdersController extends Controller
{
    public function index()
    {
        $apiEndpoint = 'https://spillas.in/api/AMA/GetPakageMaster';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->get($apiEndpoint);
        
        if ($response->successful()) {

            $responseData = $response->json();
            $orderdetails = $responseData;

            // dd($response);
            return view('pages.allorders', compact('orderdetails'));
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function addPackage()
    {
        return view('pages.add-order');

    }

    public function CreatePackage(Request $request)
    {
        $data = [
            'zoho_ItemID' => $request->input('zoho_ItemID'),
            'title' => $request->input('title'),
            'qty' => $request->input('qty'),
            'amount' => $request->input('amount'),
            'iS_Active' => $request->input('iS_Active'),
            'mop' => $request->input('mop'),
            'description' => $request->input('description'),
            'for_Policy' => $request->input('for_Policy'),
            'valid_Till' => $request->input('valid_Till'),
            'imageURL' => $request->input('imageURL'),
            'days_90_Price' => $request->input('days_90_Price'),
            'days_180_Price' => $request->input('days_180_Price'),
            'days_365_Price' => $request->input('days_365_Price'),
            'policy_type' => $request->input('policy_type'),
        ]; 

        $apiEndpoint = 'https://spillas.in/api/AMA/InsertPakageMaster';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
           
            $responseData = $response->json();
            $orderdetails = $responseData;

            // dd($response);

            return redirect('/manage-packages')->with('success', 'Operation completed successfully!');
        
        } else {
            // Handle the error
            return redirect()->back()->with('error', 'Operation not completed successfully!');
        }
    }

    public function delete($id)
    {
        $data = [
            'id' => $id,
        ];
        
        $apiEndpoint = 'https://spillas.in/api/Master/DeletePakageMaster';

        $bearerToken = session('Token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Accept' => '*/*'
        ])->post($apiEndpoint,$data);

        if ($response->successful()) {
            $responseData = $response->json();
            $category = $responseData;
            // dd($response);
            return redirect('/manage-brands');
        } else {
            return $response->json();
        }
    }
}
