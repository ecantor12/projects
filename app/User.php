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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects(){
        $this->hasMany('App\Project');
    }

    public function comments(){
        $this->hasMany('App\Comment');
    }

    public function tasks(){
        $this->belongsToMany('App\Task')->withTimestamps();
    }
    
    public function image(){
        $this->hasOne('App\Image');
    }
}