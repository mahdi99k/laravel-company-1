<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateSliderRequest extends FormRequest
{

    public function authorize()
    {
        return true;       // user first login go show error validation
    }

    public function rules()
    {
        return [
            "caption" => 'required|string|min:4|max:255',
            "image" => 'image|between:10,5000|mimes:png,jpg,jpeg,PNG|dimensions:min_width=300 , min_height=400',
            "alt" => 'required|string|min:3|max:100',
            "link" => 'required|string|between:5,150',
        ];
    }
}
