<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomLoginController extends Controller
{
    public function index()
    {

        $data = [
            'userID'=>0,
            'compID'=>0
        ];
                return view('pages.login');
    }
}
