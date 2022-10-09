<?php

namespace Modules\Product\Http\Controllers;

use Modules\Support\Http\Controllers\BackendController;
use Modules\Product\Models\Product;
use ProductValidator;

class ProductController extends BackendController
{
    public function index()
    {
        $products = Product::all();
        $params = [
            'products' => $products
        ];
        return response()->json(['data' => $params]);
    }

    public function store(ProductValidator $request)
    {
        $params = $request->validated();
    }
}
