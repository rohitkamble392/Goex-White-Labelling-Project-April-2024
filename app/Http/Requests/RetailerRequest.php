<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RetailerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // HERE WE CREATE VALIDATION AND RULES FOR OUR FORM DATA HERE WE CHECK THE DATA IS VALID OR NOT
        return [
            'name' => 'required | string',
            'shop_name' => 'required | string',
            'mobile' => 'required | string',
            'email' => 'required | email | unique:users',
            'password' => 'required',
            'address' => 'required | string',
            'pincode' => 'required | string',
            'state' => 'required | string',
            'district' => 'required | string',
        ];
    }
}
