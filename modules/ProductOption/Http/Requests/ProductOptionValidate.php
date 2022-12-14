<?php

namespace Modules\ProductOption\Http\Requests;

use Modules\Support\Http\Requests\Request;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ProductOptionValidate extends Request
{
    public function rules()
    {
        return [
            'title' => 'required',
            'image' => 'required',
            'product_id' => 'required|numeric',
            'price' => 'required',
            'stock' => '',
            'status' => '',
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
