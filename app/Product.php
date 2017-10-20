<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';


    public $fillable = ['name', 'sku', 'price', 'quality_approved', 'image_url', 'brand'];

    /**
     *
     *
     * Scope a query to only retrieve products
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRetrieve($query)
    {
        return $query->select('products.*');
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('products.status', $status);
    }

    public function scopeIsQualityApproved($query)
    {
        return $query->where('products.quality_approved', 1);
    }

    public function scopeHasPrice($query)
    {
        return $query->whereNotNull('products.price');
    }

    public function scopeHasImage($query)
    {
        return $query->whereNotNull('products.image_url');
    }

    public function scopeHasBrand($query)
    {
        return $query->whereNotNull('products.brand');
    }
}
