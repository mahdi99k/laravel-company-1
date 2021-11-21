<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateParallaxRequest extends FormRequest
{

    public function authorize()
    {
        return true;       // user first login go show error validation
    }

    public function rules()
    {
        return [
            "title" => 'required|string|min:4|max:100',
            "titleSize" => 'required|integer',
            "titleColor" => 'required',
            "body" => 'required|string|between:5,1000',
            "bodySize" => 'required|integer',
            "bodyColor" => 'required',
            'image' => 'image|between:10,5000|mimes:png,jpg,jpeg,PNG|dimensions:min_width=300 , min_height=400',
            "alt" => 'required|string|between:3,100',
        ];
    }
}
