<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentityDocument extends Model
{
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo('App\User', 'identity_document');
    }
}
