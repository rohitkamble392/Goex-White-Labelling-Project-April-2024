<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class UploadController extends Controller
{
   
public function uploadImage(Request $request)
{
    $file = $request->file('image');
    if ($file) {

        $bearerToken = config('services.api.bearer_token');
       
        $base64Image = base64_encode(file_get_contents($file->getPathname()));

       
        $response = Http::withToken($bearerToken)
        ->withHeaders([
            'Accept' => 'application/json', 
        ])
        ->attach(
            'base64String',
            file_get_contents($file->getPathname()),
            $file->getClientOriginalName()
        )
        ->post('https://spillas.in/api/UserRegistration/UploadFile');
    

          //  dd($response->status(), $response->body(), $response->json());

        if ($response->successful()) {
            return response()->json(['message' => $response->body()]);
        } else {
            return response()->json(['message' => 'Failed to upload image'], $response->status());
        }
    } else {
        return response()->json(['message' => 'No image uploaded'], 400);
    }
}

}