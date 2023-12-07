<?php

namespace App\Http\Requests;

use App\Exceptions\ApiFailedException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'department' => 'required | string ',
            'device' => 'required | string ',
            'imei1' => 'required | string ',
            'imei2' => 'required | string ',
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
