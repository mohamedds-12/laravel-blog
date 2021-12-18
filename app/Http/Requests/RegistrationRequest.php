<?php

namespace App\Http\Requests;

use App\Rules\EmailRule;
use App\Rules\PhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required', 
            'email' => 'required|email',
            'phone_number' => ['required', new PhoneNumberRule],
            'password' => 'required',
            'confirm_password' => 'required',
        ];
    }
}
