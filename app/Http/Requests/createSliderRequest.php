<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createSliderRequest extends FormRequest
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
            "fname"=>"required|min:10|max:20",
            "pass"=>"required",
            "email"=>"required",
            "image"=>"required|mimes:jpg,jpeg,png,gif"
        ];
    }
    public function messages()
    {
        return [
            "fname.required"=>"فیلد نام به صورت الزامی می باشد",
            "fname.min"=>"حداقل کاراکتر نام باید 10 کاراکتر باشد",
            "fname.max"=>"حداکثر کاراکتر نام باید 20 کاراکتر باشد",
            "pass.required"=>"مقدار کلمه عبور به صورت الزامی می باشد",
            "email.required"=>"مقدار ایمیل به صورت الزامی می باشد",
            "image.required"=>"مقدار عکس به صورت الزامی می باشد",
            "image.mimes"=>"عکس باید با فرمت jpg,jpeg,png,gif باشد"
        ];
    }
}
