<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateSliderRequest extends FormRequest
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
            "title"=>'required|between:10,100',
            "caption"=>'required|between:10,100',
            "file"=>'required|mimes:jpg,jpeg,png|size:190',

        ];
    }
    public function messages()
    {
        return [
            "title.required"=>"مقدار عنوان به صورت الزامی می باشد",
            "title.between"=>"مقدار عنوان باید بین 10 تا 100 کاراکتر باشد",
            "caption.required"=>"مقدار زیرنویس به صورت الزامی می باشد",
            "caption.between"=>"مقدار زیرنویس باید بین 10 تا 100 کاراکتر باشد",
            "file.required"=>"مقدار عکس به صورت الزامی می باشد",
            "file.mimes"=>"عکس باید با فرمت jpg,jpeg,png باشد",
            "file.size"=>"مقدار عکس نباید بیشتر از 190 کیلوبایت باشد",

        ];
    }
}
