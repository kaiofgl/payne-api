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

    public function scopeSearch($query, $search)
    {

        $query->when($search, function ($query, $search) {

            if ($search->query('price') != null) {
                $query->withWhereHas('options', function ($query) use ($search) {
                    if (count($search->query('price')) == 2) {
                        $query->where('price', '>=', min($search->query('price')))
                            ->where('price', '<=', max($search->query('price')));
                    } else {
                        $query->where('price', '>=', $search->query('price'));
                    }
                });
            }

            if ($search->query('tag') != null) {
                $query->withWhereHas('product_tags', function ($query) use ($search) {
                    $query->where('tag_id', '=', $search->query('tag'));
                });
            }
            if ($search->query('title') != null) {
                $query->where('title', 'like', "%{$search->query('title')}%");
            }
            if ($search->query('description') != null) {
                $query->where('description', 'like', "%{$search->query('description')}%");
            }
        });
    }
}
