<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadImageRequest extends FormRequest
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
            'file' => 'max:1024|mimes:jpeg,png'
        ];
    }
    public function messages()
    {
        return [
            'file.max' => 'سایز عکس شما بیش از حد بزرگ میباشد لطفا عکس را کمتر از 1024 کیلوبایت آپلود کنید',
            'file.mimes' => 'عکس ها را فقط با پسوند jpg و png ارسال کنید',
        ];
    }
}
