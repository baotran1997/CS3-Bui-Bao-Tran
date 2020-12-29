<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|gt:6',
            'email' => 'required|unique:users',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '*This field is required',
            'username.required' => '*This field is required',
            'password.required' => '*This field is required',
            'password.gt' => '*Password must be at least 6 characters ',
            'username.unique' => '*This username is already being used',
            'email.unique' => '*This email address is already being used',
        ];
    }
}
