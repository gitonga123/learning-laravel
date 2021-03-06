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

    protected $hidden = ['id','author_id', 'publisher_id','created_at', 'updated_at', 'deleted_at'];
    protected $visible = ['title', 'description', 'price'];
    //a local scope

    public function scopeCheap($query)
    {
        return $query->where('price', '<', 10);
    }

    public function scopeExpensive($query)
    {
        return $query->where('price', '>', 50);
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

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }

    public function authors()
    {
        return $this->hasMany('App/Author');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
