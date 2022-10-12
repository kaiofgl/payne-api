<?php

namespace Modules\Product\Http\Controllers;

use App\Exceptions\ApiException;

use Modules\Product\Models\Product;
use Modules\Product\Http\Requests\ProductValidate;
use Modules\Support\Http\Controllers\BackendController;
use Modules\Product\Http\Resources\ProductResource;
use Modules\Product\Http\Resources\ProductCollection;

class ProductController extends BackendController
{
    public function all()
    {
        $products = Product::query()
            ->with('product_tags.tags')
            ->has('options')
            ->search(request())
            ->where('status', '=', '1')
            ->paginate(16);

        if ($products->items() == null) {
            throw new ApiException('Error', 404);
        }

        return (new ProductCollection($products))->response()->setStatusCode(200);
    }

    public function find($id)
    {

        $product = Product::has('options')->where('id', '=', $id)->first();
        if (!isset($product)) {
            throw new ApiException('Error', 404);
        }

        return (new ProductResource($product))->response()->setStatusCode(200);
    }

    public function store(ProductValidate $request)
    {
        $params = $request->validated();

        if (!isset($params)) {
            throw new ApiException('Error', 404);
        }

        $product = Product::create($params);
        return (new ProductResource($product))->response()->setStatusCode(201);
    }

    public function update(ProductValidate $request, $id)
    {
        $params = $request->validated();
        $product = Product::find($id);

        if (!isset($product)) {
            throw new ApiException('Error', 404);
        }

        $product->update($params);
        return (new ProductResource($product))->response()->setStatusCode(201);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

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
