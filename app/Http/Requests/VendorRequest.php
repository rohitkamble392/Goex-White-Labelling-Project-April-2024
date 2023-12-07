<?php

namespace App\Http\Requests;

use App\Exceptions\ApiFailedException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required | string ',
            'email' => 'required | string ',
            'mobile' => 'required | string ',
            'address' => 'required | string ',
            'policy_type' => 'required | string ',
            'per_price' => 'required | string ',
            'total_policy' => 'required | string ',
            'amount' => 'required | string ',
            'paid_amount' => 'required | string ',
            'remaining_amount' => 'required | string ',
        ];
    }
    

    /**
     * Handle a failed validation attempt for API.
     */
    protected function failedValidation(Validator $validator)
    {
        if (request()->is('api/*')) {
            throw new ApiFailedException($validator->errors());
        }
    }
}
