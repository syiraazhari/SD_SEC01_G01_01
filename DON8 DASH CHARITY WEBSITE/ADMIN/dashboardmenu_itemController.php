<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IsAdmin;
use App\setting;
use App\Role;
use App\User;
use App\menu_item;
use App\menu;
use Auth;

class dashboardmenu_itemController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardMenu-items.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //To Get validate
        $request->validate([
        'menu_id' => 'required',
        'title' => 'required',
        'url' => 'required',
        ]);
        //To New menu_item
        $Menu = new menu_item;
        $Menu->menu_id = $request->input('menu_id');
        $Menu->order = $request->input('order');
        $Menu->title = $request->input('title');
        $Menu->url = $request->input('url');
        $Menu->target = $request->input('target');
        $Menu->save();  
                return redirect()->TO('dashboard/dashboardMenus')

                        ->with('success','Menu Item created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($title)
    {
        // menu_item Delete
        $item = menu_item::where('title', '=', $title)->firstOrFail();
        $item->delete();
        return back()->with('Delete','menu item deleted successfully');
    }
}
