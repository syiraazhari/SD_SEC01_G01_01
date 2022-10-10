<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IsAdmin;
use App\setting;
use App\Role;
use App\User;
use App\advertiser;
use File;
use Auth;
use Validator;

class dashboardvertiserController extends Controller
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
         // GET Advertisers
        $advertisers = advertiser::simplePaginate(10);
        return view('dashboard.dashboardAds.index',compact('advertisers'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET Advertisers
        return view('dashboard.dashboardAds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);
        // ADD new advertiser
        $Ad = new advertiser;
        $Ad->Location    = $request->input('Location');
        $Ad->type        = $request->input('type');
        $Ad->name        = $request->input('name');
        $Ad->displayname = $request->input('displayname');
        $Ad->url         = $request->input('url');
        $Ad->code        = $request->input('code');
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
          $file = $request->file('image');
          $date = date('FY');
          $destinationPath = 'storage/ads/'.$date.'/';
          $viewimage = 'storage/ads/'.$date.'/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Ad->image = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $Ad->save(); 
        }else{
          $Ad->save();  
        }
          $Ad->save();

                return redirect()->TO('dashboard/dashboardAds')

                        ->with('success','Ads created successfully.');
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        //To Get All Ads 
        $Ads = advertiser::where('name', '=', $name)->firstOrFail();
        return view('dashboard.dashboardAds.edit',compact('Ads'));
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
        //validate
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);
        //To Get All Ads 
        $Ads = advertiser::where('name', '=', $name)->firstOrFail();
        $Ads->Location    = $request->input('Location');
        $Ads->type        = $request->input('type');
        $Ads->name        = $request->input('name');
        $Ads->displayname = $request->input('displayname');
        $Ads->url         = $request->input('url');
        $Ads->code        = $request->input('code');
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
          File::delete($Ads->image);
          $file = $request->file('image');
          $date = date('FY');
          $destinationPath = 'storage/ads/'.$date.'/';
          $viewimage = 'storage/ads/'.$date.'/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Ads->image = $filename;
          // THIS TO SAVE  Settings UPDATE //

          $Ads->save(); 
        }else{
          $Ads->save();  
        }
          $Ads->save();

                return redirect()->TO('dashboard/dashboardAds')

                        ->with('success','Ads Edit successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ADD delete advertiser
        $Ads = advertiser::findOrFail($id);
        File::delete($Ads->image);
        $Ads->delete();
        return back()->with('Delete','Ads Deleted successfully');
    }
}
