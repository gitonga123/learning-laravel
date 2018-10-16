<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['first_name', 'last_name'];
    protected $appends = ['complete_name'];
    protected $visible = ['first_name', 'last_name'];

    public function getCompleteNameAttribute()
    {
        return $this->attributes['first_name'] . ' '. $this->attributes['last_name'];
    }


}
