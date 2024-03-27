<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use GuzzleHttp\Client;



class PolicyUpdateController extends Controller
{

    public function index()
    {
        return view('pages.device-upload');
    }
    public function bulkPatch(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls',
        ]);

        $excelData = Excel::toArray([], $request->file('excel_file'));

      
        $client = new Client();

        $accessToken = 'ya29.a0AfB_byDxmMLfjDMj2T7mopUERKlXhyRdd0trj6Ec8ZhUVXSchrczCLf5YtWKaGGECxZ80mfoFp4JFok68RluhizvCbGtKdNmgeyWhWW9JHwgMyYV8p4Jdu0H9giRhFqqQD0bayepmXEyrXcyAb2O_A1IqtD28nUEZrK-aCgYKAV4SARISFQHGX2MiqXshgasckKt1SlUdAGt2lA0171';

        foreach ($excelData[0] as $index => $row) {
    
            if ($index === 0) {
                continue;
            }
            
            $deviceId = $row[0];
   
            $payload = [
                'json' => [
                    'state' => 'ACTIVE',
                    'policyName' => 'hardlock',
                ]
            ];

            try {
                $response = $client->patch("https://androidmanagement.googleapis.com/v1/enterprises/LC02sxcjk3/devices/$deviceId", [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
                    ],
                    'json' => $payload, 
                    'http_errors' => false,
                    'verify' => false,
                ]);
                $statusCode = $response->getStatusCode();
                Log::info("Device ID: $deviceId - Status: Success - HTTP Status Code: $statusCode");
            } catch (\Exception $e) {
                Log::error("Device ID: $deviceId - Status: Failed - Error Message: " . $e->getMessage());
            }
        }
        return redirect()->back()->with('success', 'Bulk patch operation completed successfully.');
    }
}