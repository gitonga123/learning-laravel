<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product')
            ->withPivot('products_amount', 'price')
            ->withTimestamps();
    }
}
