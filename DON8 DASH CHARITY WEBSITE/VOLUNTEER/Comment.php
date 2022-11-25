<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Post_id', 'User_id','Comment'
    ];
    

    // THIS function Post TO MAKE RELATHION Post 
     public function Post()
    {
        return $this->belongsTo('App\Post','Post_id');
    }

    // THIS function User TO MAKE RELATHION Post 
     public function User()
    {
        return $this->belongsTo('App\User','User_id');
    }

    

}
