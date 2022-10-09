<?php

namespace Modules\ProductOption\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $fillable = ['name', 'thumbnail', 'price', 'product_id', 'stock', 'status'];
}
