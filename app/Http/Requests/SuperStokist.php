<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuperStokist extends FormRequest
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
        return [
            'name' => 'required | string',
            'shop' => 'required | string',
            'mobile' => 'required | string',
            'email' => 'required | string',
            'address' => 'required | string',
            'pin' => 'required | string',
            'district' => 'required | string',
            'state' => 'required | string',
        ];
    }
}
