<?php

namespace App\Http\Requests\Auth;


use Illuminate\Foundation\Http\FormRequest;

class phoneNumberConfirmTokenRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'token' => ['required', 'integer', 'digits:4'],
        ];
    }
}
