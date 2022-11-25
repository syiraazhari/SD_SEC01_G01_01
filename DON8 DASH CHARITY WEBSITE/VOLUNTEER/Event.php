<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Title_en', 'Title_ar','Title_gr','slug','Content_en','Content_ar','Content_gr','image','Days','Hours','Minutes','Address','FinishTime','StartTime'
    ];
}
