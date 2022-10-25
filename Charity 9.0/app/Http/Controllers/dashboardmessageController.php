<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IsAdmin;
use App\setting;
use App\Role;
use App\User;
use App\Message;
use File;
use Auth;


class dashboardmessageController extends Controller
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
        // Message GET
        $Messages = Message::simplePaginate(10);
        return view('dashboard.dashboardMessages.index',compact('Messages'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    **/

    public function destroy($id)
    {
        // Message Delete
        $Message = Message::findOrFail($id);
        $Message->delete();
        return back()->with('Delete','Message Deleted successfully');
    }
}
