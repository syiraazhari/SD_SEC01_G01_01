<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Post;
use App\Comment;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'name', 'email','avatar','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    // THIS function Post TO MAKE RELATHION WITH USERS
     public function Posts()
    {
        return $this->hasMany('App\Post');
    }
    


    // THIS function Comment TO MAKE RELATHION
    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }
}
