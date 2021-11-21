<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateNewsRequest extends FormRequest
{

    public function authorize()
    {
        return true;       // user first login go show error validation
    }

    public function rules()
    {
        return [
            "title" => 'required|string|between:4,150',
            "image" => 'image|between:10,5000|mimes:png,jpg,jpeg,PNG|dimensions:min_width=300 , min_height=400',
            "alt" => 'required|string|between:3,100',
            "summary" => 'required|string|between:5,2500'
        ];
    }
}
