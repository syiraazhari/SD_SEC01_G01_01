<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IsAdmin;
use App\setting;
use App\Role;
use App\User;
use Auth;


class dashboardController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin');
    }
    
}
