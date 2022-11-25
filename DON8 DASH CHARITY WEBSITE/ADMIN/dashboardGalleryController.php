<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IsAdmin;
use App\setting;
use App\Role;
use App\User;
use App\Gallery;
use File;
use Auth;
use Validator;

class dashboardGalleryController extends Controller
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
        //To Get All Galleres
        $Galleres = Gallery::simplePaginate(10);
        return view('dashboard.dashboardGalleres.index',compact('Galleres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardGalleres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([

         'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

       ]);
        $Gallery = new Gallery;
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
          $file = $request->file('image');
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Gallery->image = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $Gallery->save(); 
        }else{
          $Gallery->save();  
        }
          $Gallery->save();

                return redirect()->TO('dashboard/dashboardGalleres')

                        ->with('success','Gallery created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Gallery Delete
        $Gallery = Gallery::findOrFail($id);
        File::delete($Gallery->image);
        $Gallery->delete();
        return back()->with('Delete','Gallery Deleted successfully');
    }
}
