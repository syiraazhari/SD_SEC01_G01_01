<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\menu;


class menu_item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'menu_id', 'order', 'title','url','target'
    ];

    // THIS function menu TO MAKE RELATHION Post 
     public function menu()
    {
        return $this->belongsTo('App\menu','menu_id');
    }
}
