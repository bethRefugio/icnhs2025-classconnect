<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
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
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => 'required|confirmed|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        //'password' => ['required', 'string', 'min:8', 'confirmed'],
        'agree_terms_and_conditions' => ['required'],
        //'g-recaptcha-response' => 'required|captcha'
      ];
    }

    public function messages()
    {
        return [
            'password.regex' => 'Password should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character',
        ];
    }
}
