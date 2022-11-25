<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;
use App\Comment;

class Post extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id', 'category_id','Title_en','Title_ar','Title_gr','body_en','body_ar','body_gr','slug','seo_title','excerpt','body','image',
        'meta_description','meta_keywords','featured'
    ];

    // THIS function Category TO MAKE RELATHION Post 
     public function Category()
    {
        return $this->belongsTo('App\Category','category_id');
    }

    // THIS function User TO MAKE RELATHION WITH Post
    public function User()
    {
        return $this->belongsTo('App\User','author_id');
    } 
    // THIS function Comment TO MAKE RELATHION
    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }
}
