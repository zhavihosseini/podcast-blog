<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Savecontent extends FormRequest
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
            'picture' => 'max:1024|mimes:jpeg,png|dimensions:width=1280,height=667'
        ];
    }
    public function messages()
    {
        return [
            'picture.max' => 'سایز عکس شما بیش از حد بزرگ میباشد لطفا عکس را کمتر از 1024 کیلوبایت آپلود کنید',
            'picture.mimes' => 'ما فقط عکس ها را با پسوند jpg و png قبول میکنیم',
        ];
    }
}
