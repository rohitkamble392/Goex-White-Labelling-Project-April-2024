<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ApiController extends Controller
{
    // Define base URL as a class property
    private $baseUrl = "http://emm.goelectronix.com/";

    function getUrl()
    {
        $client = new Client([
            'base_uri' => $this->baseUrl,
            'verify'   => false,
        ]);
        $response = $client->request('GET', 'api/ama/getUrl', [
            'headers' => [
                'Content-Type'  => 'application/json',
            ],
        ]);
        return json_decode($response->getBody(), true);
    }

    public function createPolicy()
    {
        // Assuming you want to pass enterpriseId and policyName from the request
        $enterpriseId = "LC00pwfvep";

        $client = new Client([
            'base_uri' => $this->baseUrl,
            'verify'   => false,
        ]);

            $response = $client->request('GET', 'api/ama/createPolicy', [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'query' => [
                    'enterpriseId' => $enterpriseId,
                    'policyName' => "abx",
                ],
            ]);

            return json_decode($response->getBody(), true);
    }
    public function createQr()
    {
        // Assuming you want to pass enterpriseId and policyName from the request
        $enterpriseId = "LC00pwfvep";

        $client = new Client([
            'base_uri' => $this->baseUrl,
            'verify'   => false,
        ]);

            $response = $client->request('GET', 'api/ama/createqr', [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'query' => [
                    'enterpriseId' => $enterpriseId,
                    'policyName' => "abx",
                ],
            ]);

            $imageUrl = json_decode($response->getBody(), true)['message'];

            $context = stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]);
            
            $contents = file_get_contents($imageUrl, false, $context);

            // Download and save the image
            $imageName = 'policy_image_' . time() . '.jpg'; // You can generate a unique name
            Storage::disk('public')->put($imageName, $contents);


            return json_decode($response->getBody(), true);
    }
}