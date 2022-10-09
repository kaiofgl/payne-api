<?php

namespace Modules\Product\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\ProductOption\Http\Resources\ProductOptionResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'options' => ProductOptionResource::collection($this->options),
            'price' => $this->price
        ];
    }

    public function with($request)
    {
        return [
            'error' => false
        ];
    }
}
