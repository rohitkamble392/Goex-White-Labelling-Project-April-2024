<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Session;
use Artisan;

class LoginController extends Controller
{
  public function login(Request $request)
    {
        // Make API call to authenticate user
        $response = Http::post('https://spillas.in/api/Authenticate/AuthenticateUser', [
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $responseData = $response->json();
            if ($response->successful() && $responseData['IsSuccess']) {

            $seniorID;

            if($responseData['Result']['Senior_ID'] === 1)
            {
                $seniorID = $responseData['Result']['UserID'];
            }
            else
            {
                $seniorID = $responseData['Result']['Senior_ID'];
            }

            session([
                'roleName' => $responseData['Result']['Role'],
                'UserID' => $responseData['Result']['UserID'],
                // 'companytoken' => $responseData['companytoken'],
                'Company_ID' => $responseData['Result']['Company_ID'],
                'Senior_ID' => $seniorID,
                'Token' => $responseData['Token'],
                'companyDomain' => $responseData['Result']['companyDomain'],
                'phoneNumber' => $responseData['Result']['PhoneNumber'],
                'Username' => $responseData['Result']['Username'],
            ]);

        // dd($response);
        $checkuser = $responseData['Result']['Role'];
        
            $this->updateTokenInEnvFile($responseData['Token']);
            if ($checkuser === 1) {
                return redirect()->intended('/superadmin-dashboard');
            }
            if ($checkuser === 2) {

                return redirect()->intended('/company-dashboard');
            }
            if ($checkuser === 9) {
                return redirect()->intended('/superstokist-dashboard');

            }
            if ($checkuser === 10) {
                return redirect()->intended('/distributor-dashboard');
            }
            if ($checkuser === 11) {
                return redirect()->intended('/employee-dashboard');
            }
            if ($checkuser === 12) {
                return redirect()->intended('/retailer-dashboard');
            }
            if ($checkuser === 13) {
                return redirect()->intended('/promoter-dashboard');
            }
            // return redirect()->intended('/superadmin-dashboard');
        } else {
           return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);

        }
    }

        public function logout(Request $request)
        {
          //  $this->guard()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return $request->wantsJson()
                ? new Response('', 204)
                : redirect('/login');
        }
    
        public function showLoginForm()
        {
            return view('auth.login');
        }

        public function updateTokenInEnvFile($newToken)   
        {
            $pathToEnvFile = base_path('.env');

            File::put($pathToEnvFile, str_replace(
                'BEARER_TOKEN=' . env('BEARER_TOKEN'), // Replace existing token value
                'BEARER_TOKEN=' . $newToken, // Set new token value
                File::get($pathToEnvFile)
            ));
            
           Artisan::call('config:clear');
        
    }
}