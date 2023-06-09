<?php

namespace App\Http\Requests\Article;


use Illuminate\Foundation\Http\FormRequest;

class articleStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title'       => ['required', 'max:255'],
            'summery'     => ['required', 'max:255'],
            'description' => ['required'],
            'image'       => ['nullable ', 'mimes:jpg,jpeg,png,gif', 'max:10240'],
//            'tags'        => ['required', 'max:255'],
        ];
    }
}
