<?php

namespace Modules\ProductOption\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $fillable = ['title', 'image', 'price', 'product_id', 'stock', 'status'];
}
