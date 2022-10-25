<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Cause extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Title_en', 'Title_ar','Title_gr','slug','Content_en','Content_ar','Content_gr','category_id','Raised','Goal','Donors','image'
    ];

    // THIS function Category TO MAKE RELATHION Post 
     public function Category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
}
