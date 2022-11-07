<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;
use App\Cause;
use App\Role;
use App\User;
use Session;
use Auth; 
use App\Post;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResponseCauses
     */
    public function index()
    {
        //To Get All Cause active OUT SIDE IN HOME VIEW
        $Causes = Cause::orderBy('created_at','desc')->simplePaginate(10);
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Causes.index',compact('Causes'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Causes.index',compact('Causes'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Causes.index',compact('Causes')); 
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

        //To Get All Cause 
        $Cause = Cause::where('slug', '=', $slug)->firstOrFail();
         //To Get All Posts active OUT SIDE IN HOME VIEW
        $RentPosts = Post::orderBy('created_at','desc')->get();
        return view('english.Causes.show',compact('Cause','RentPosts'));
    }

   
}
