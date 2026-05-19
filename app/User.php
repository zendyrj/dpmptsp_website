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
        'name', 'email', 'password', 'level_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function level()
    {
        return $this->belongsTo('App\Level', 'level_id');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function infos()
    {
        return $this->hasMany('App\Info');
    }
    public function fasilitas()
    {
        return $this->hasMany('App\Info');
    }
}
