<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
        return [
            'name' => 'required | string',
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
