<?php

namespace Modules\ProductOPtion\Http\Controllers;

use App\Exceptions\ApiException;

use Modules\ProductOption\Models\ProductOption;
use Modules\ProductOption\Http\Requests\ProductOptionValidate;
use Modules\ProductOption\Http\Resources\ProductOptionResource;
use Modules\Support\Http\Controllers\BackendController;

class ProductOptionController extends BackendController
{
    public function index($id)
    {
        $productOptions = ProductOption::where('product_id', '=', $id)->get();
        // dd($productOptions);
        if (!isset($productOptions)) {
            throw new ApiException('Error', 404);
        }

        return (ProductOptionResource::collection($productOptions))->response()->setStatusCode(201);
    }


    public function store(ProductOptionValidate $request)
    {
        $params = $request->validated();
        if (!isset($params)) {
            throw new ApiException('Error', 404);
        }

        $product = ProductOption::create($params);
        return (new ProductOptionResource($product))->response()->setStatusCode(201);
    }

    public function update(ProductOptionValidate $request, $id)
    {
        $params = $request->validated();
        $product = ProductOption::find($id);

        if (!isset($product)) {
            throw new ApiException('Error', 404);
        }

        $product->update($params);
        return (new ProductOptionResource($product))->response()->setStatusCode(201);
    }

    public function destroy($id)
    {
        $product = ProductOption::find($id);

        if (!isset($product)) {
            throw new ApiException('Error', 404);
        }

        $params = [
            'error' => false,
        ];

        $product->delete();
        return response()->json($params);
    }
}
