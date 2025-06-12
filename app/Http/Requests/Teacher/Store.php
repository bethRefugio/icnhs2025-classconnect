<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
        'name' => ['required', 'string'],
        'email' => ['required', 'string'],
        'contact_no' => ['required', 'string'],
        'vacant_time' => [ 'string'],
        'vacant_day' => ['string'],
        'department_id' => ['required', 'integer'],
        'room_id' => ['required', 'integer', 'exists:classrooms,id'],
      ];
    }

}
