<?php

namespace Modules\Product;

use Modules\Support\BaseServiceProvider;

class ProductServiceProvider extends BaseServiceProvider
{

    protected $namespace = 'Modules\Product\Http\Controllers';

    public function boot()
    {
        parent::boot();
    }
}
