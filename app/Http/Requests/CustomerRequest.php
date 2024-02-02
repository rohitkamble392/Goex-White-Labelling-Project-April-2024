<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'mobile' => 'required | string',
            'email' => 'required | email | unique:users',
            'imei1' => 'required | string',
            'imei2' => 'required | string',
            'finance' => 'required | string',
            'device_amount' => 'required | string',
            'processing_fees' => 'required | string',
            'down_payment' => 'required | string',
            'emi_tenure' => 'required | string',
            'emi_amount' => 'required | string',
            'comment' => 'required | string',
        ];
    }
}
