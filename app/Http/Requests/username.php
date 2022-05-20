<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class username extends FormRequest
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
            'username' => 'required|unique:users|max:255|string'
        ];
    }
    public function messages()
    {
        return [
            'username.unique:users' => 'ذخیره نشد ! نام کاربری شما تکراری است.',
        ];
    }
}
