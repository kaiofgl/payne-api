<?php

namespace Modules\ProductTag\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Product\Models\Product;

class ProductTag extends Model
{

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function tags()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
