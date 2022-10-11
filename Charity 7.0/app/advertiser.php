<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertiser extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Location', 'type', 'name','displayname','url','image','code'
    ];
}
