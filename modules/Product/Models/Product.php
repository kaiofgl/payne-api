<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\ProductOption\Models\ProductOption;
use Modules\ProductTag\Models\ProductTag;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'thumbnail', 'status'];

    public function options()
    {
        return $this->hasMany(ProductOption::class);
    }

    public function product_tags()
    {
        return $this->hasMany(ProductTag::class, 'product_id', 'id');
    }
}
