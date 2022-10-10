<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;
use App\Cause;
use App\Event;
use App\Gallery;
use App\Post;
use App\Role;
use App\User;
use Session;
use Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResponseCauses
     */
    public function index()
    {
        //To Get All Event active OUT SIDE IN HOME VIEW
        $Events = Event::orderBy('created_at','desc')->paginate(4);
        //To Get All Gallery active OUT SIDE IN HOME VIEW
        $Gallers = Gallery::orderBy('created_at','desc')->paginate(20);
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Events.index',compact('Events','Gallers'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Events.index',compact('Events','Gallers'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Events.index',compact('Events','Gallers')); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //To Get Event 
        $Event = Event::where('slug', '=', $slug)->firstOrFail();
        return view('english.Events.show',compact('Event'));
    }
}
