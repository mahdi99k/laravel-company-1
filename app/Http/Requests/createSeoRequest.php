<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createSeoRequest extends FormRequest
{

    public function authorize()
    {
        return true;       // user first login go show error validation
    }


    public function rules()
    {
        return [
            "title" => 'required|string|min:5|max:100',
            "keywords" => 'required|string|between:5,500',
            "description" => 'required|string|between:5,500',
            "author" => 'required|string|min:3|max:100'
        ];
    }
}
