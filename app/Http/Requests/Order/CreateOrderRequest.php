<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        $rules['type'] = [
            'required',
            'max:255',
        ];

        $rules['descreption'] = [
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