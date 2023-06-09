<?php

namespace App\Http\Requests\Auth;

use App\Rules\phone;
use App\Rules\phoneVerified;
use Illuminate\Foundation\Http\FormRequest;

class forgetPasswordConfirmTokenRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'token' => ['required', 'integer', 'digits:5'],
        ];
    }
}
