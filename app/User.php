<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'team_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function identityDocument()
    {
        return $this->hasOne('App\IdentityDocument', 'user_id');
    }

    public function orders()
    {
        // modelm, foreign key , primary key
        return $this->hasMany(Order::class);
    }

    public function account()
    {
        return $this->hasOne(Account::class);
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
