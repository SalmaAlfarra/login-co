<?php

namespace App\Http\Requests\PoliceOffice;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreatePoliceOfficeRequest extends FormRequest
{
     public function authorize()
     {
     return true;
     }

    public function rules()
    {
        $rules = [];

        $rules['name'] = [
            'required',
            'max:255',
        ];

        $rules['phone'] = [
            'nullable',
            'numeric',
            'digits_between:7,15',
            Rule::unique('police_offices', 'phone')
        ];

        $rules['address'] = [
            'required',
            'max:255',
        ];

        return $rules;
    }

    public function all($keys = null)
    {
        return parent::all();
    }
}