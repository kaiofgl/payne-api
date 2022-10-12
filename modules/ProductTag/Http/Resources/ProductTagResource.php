<?php

namespace Modules\ProductTag\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductTagResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->tags->id,
            'name' => $this->tags->name,
        ];
    }

    public function with($request)
    {
        return [
            'error' => false
        ];
    }
}
