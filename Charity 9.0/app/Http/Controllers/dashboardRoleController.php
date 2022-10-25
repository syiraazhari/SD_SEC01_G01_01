<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IsAdmin;
use App\setting;
use App\Role;
use App\User;
use Auth;

class dashboardRoleController extends Controller
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
        // GET Roles
        $Roles = Role::simplePaginate(10);
        return view('dashboard.dashboardRoles.index',compact('Roles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET dashboardRoles create
        return view('dashboard.dashboardRoles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // GET validate create
        $request->validate([

        'name' => 'required',
        'display_name' => 'required',

        ]);
        // GET new Role
        $Role = new Role;
        $Role->name = $request->input('name');
        $Role->display_name = $request->input('display_name');
        $Role->save();  

                return redirect()->TO('dashboard/dashboardRoles')

                        ->with('success','Role created successfully.');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        //To Get All Role 
        $Role = Role::where('name', '=', $name)->firstOrFail();
        return view('dashboard.dashboardRoles.edit',compact('Role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        // GET validate create
        $request->validate([

        'name' => 'required',
        'display_name' => 'required',

        ]);
        // GET Role EDIT
        $Role = Role::where('name', '=', $name)->firstOrFail();
        $Role->name = $request->input('name');
        $Role->display_name = $request->input('display_name');
        $Role->save();  

                return redirect()->TO('dashboard/dashboardRoles')

                        ->with('success','Role Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Role Delete
        $Role = Role::findOrFail($id);
        $Role->delete();
        return back()->with('Delete','Role deleted successfully');
    }
}
