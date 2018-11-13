<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class);
    }

    public function shops()
    {
        return $this->belongsToMany('App\Shop');
    }
}
