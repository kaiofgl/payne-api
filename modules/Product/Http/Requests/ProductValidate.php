<?php

namespace Modules\Product\Http\Requests;

use Modules\Support\Http\Requests\Request;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ProductValidate extends Request
{
    public function rules()
    {
        return [
            'title' => '',
            'description' => '',
            'thumbnail' => '',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'error'   => true,
            'error_messages' => true,
            'data' => $validator->errors()
        ]));
    }
}
