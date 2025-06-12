<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
{
    return [
        'name' => ['required', 'min:3'],
        'email' => [
            'nullable', 'email',
            Rule::unique((new User)->getTable())->ignore($this->route()->user->id ?? null)
        ],
        'contact_no' => [
            'nullable',
            'unique:users,contact_no,' . ($this->route()->user->id ?? 'NULL') . ',id',
            'regex:/^[0-9\-\+\s\(\)]+$/'
        ],
        'password' => [
            $this->route()->user ? 'required_with:password_confirmation' : 'required', 'nullable', 'confirmed', 'min:6'
        ],
        // Custom validation for at least one
        function ($attribute, $value, $fail) {
            if (empty($this->email) && empty($this->contact_no)) {
                $fail('Either email or contact number is required.');
            }
        }
    ];
}
}
