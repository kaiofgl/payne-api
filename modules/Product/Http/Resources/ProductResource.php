<?php

namespace Modules\Product\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\ProductOption\Http\Resources\ProductOptionResource;
use Modules\ProductTag\Http\Resources\ProductTagResource;

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
            'title' => $this->title,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'status' => $this->whenNotNull($this->status),
            'options' => $this->when(count($this->options), ProductOptionResource::collection($this->options)),
            'badges' => $this->when(count($this->product_tags), ProductTagResource::collection($this->product_tags))
        ];
    }

    public function with($request)
    {
        return [
            'error' => false
        ];
    }
}
