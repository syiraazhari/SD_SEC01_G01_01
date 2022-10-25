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
use DB;

class dashboardmenuController extends Controller
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
        //To New Menus
        $Menus = menu::with('menu_items')->get();
        return view('dashboard.dashboardMenus.index',compact('Menus'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //To New Menus
        $Menus = menu::with('menu_items')->get();
        return view('dashboard.dashboardMenus.create',compact('Menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //To New Menus validate
        $request->validate([

        'name' => 'required',

        ]);
        $Menu = new menu;
        $Menu->name = $request->input('name');
        $Menu->save();  

                return redirect()->TO('dashboard/dashboardMenus')

                        ->with('success','Menu created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //To delete Menus 
        $menu = menu::find($id);
        $menu_items = $menu->menu_items();
        $menu->delete();
        $menu_items->delete();
        return back()->with('Delete','Menu deleted successfully');
    }


}
