<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createLinkRequest extends FormRequest
{

    public function authorize()
    {
        return true;       // user first login go show error validation
    }

    public function rules()
    {
        return [
            "name_link" => 'required|string|min:3|max:150',
            "url" => 'required|url|max:150',
        ];
    }
}
