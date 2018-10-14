<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $casts = [
        'is_rare' => 'boolean'
    ];

    //a local scope

    public function scopeCheap($query)
    {
        return $query->where('price', '<', 10);
    }

    public function scopeExpensive($query)
    {
        return $query->where('priee', '>', 50);
    }

    public function scopeLong($query)
    {
        return $query->where('pages_count', '>', 700);
    }

    public function scopeShort($query)
    {
        return $query->where('page_count', '<', 100);
    }

    public function getPriceAttribute($value)
    {
        return 'Ksh. ' . $value;
    }
}
