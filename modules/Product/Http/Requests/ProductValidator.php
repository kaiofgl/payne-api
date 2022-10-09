<?php

namespace Modules\Product\Http\Requests;

use Modules\Support\Http\Requests\Request;

class ProductValidator extends Request
{
    public function rules()
    {
        return [
            'id' => '',
        ];
    }
}
