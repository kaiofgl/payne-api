<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\ProductOption\Models\ProductOption;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image'];

    public function options()
    {
        return $this->hasMany(ProductOption::class);
    }
}
