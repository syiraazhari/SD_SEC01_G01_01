<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IsAdmin;
use App\setting;
use App\User;
use Auth;
use Validator;
class dashboardSettingsController extends Controller
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
        //To Get All setting 
        $Settings = setting::find(1);
        return view('dashboard.dashboardSettings.index',compact('Settings'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //To Get All setting EDIT
        $Setting = setting::where('id', '=', $id)->firstOrFail();
        return view('dashboard.dashboardSettings.edit',compact('Setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // THIS FUNCTION update setting IN PAGE setting //
        $Setting = setting::findOrFail($id);
        $Setting->Language = $request->input('Language');
        $Setting->SiteTitle = $request->input('SiteTitle');
        $Setting->Name = $request->input('Name');
        $Setting->Location = $request->input('Location');
        $Setting->Googlemap = $request->input('Googlemap');
        $Setting->video = $request->input('video');
        $Setting->PhoneNumber = $request->input('PhoneNumber');
        $Setting->Email = $request->input('Email');
        $Setting->MetaDescription = $request->input('MetaDescription');
        $Setting->MetaKeyWords = $request->input('MetaKeyWords');
        $Setting->Facebook = $request->input('Facebook');
        $Setting->Twitter = $request->input('Twitter');
        $Setting->GitHub = $request->input('GitHub');
        $Setting->Slack = $request->input('Slack');
        $Setting->Dribbble = $request->input('Dribbble');
        $Setting->LinkedIn = $request->input('LinkedIn');
        $Setting->Behance = $request->input('Behance');
        $Setting->Digg = $request->input('Digg');
        $Setting->Flickr = $request->input('Flickr');
        $Setting->Vimeo = $request->input('Vimeo');
        $Setting->url_App = $request->input('url_App');
        $Setting->about_en = $request->input('about_en');
        $Setting->about_gr = $request->input('about_gr');
        $Setting->about_ar = $request->input('about_ar');
        $Setting->title_home_en = $request->input('title_home_en');
        $Setting->title_home_gr = $request->input('title_home_gr');
        $Setting->title_home_ar = $request->input('title_home_ar');
        $Setting->sub_title_home_en = $request->input('sub_title_home_en');
        $Setting->sub_title_home_gr = $request->input('sub_title_home_gr');
        $Setting->sub_title_home_ar = $request->input('sub_title_home_ar');
        $Setting->title_about_en = $request->input('title_about_en');
        $Setting->title_about_gr = $request->input('title_about_gr');
        $Setting->title_about_ar = $request->input('title_about_ar');
        $Setting->content_about_en = $request->input('content_about_en');
        $Setting->content_about_gr = $request->input('content_about_gr');
        $Setting->content_about_ar = $request->input('content_about_ar');
        $Setting->content_blog_en = $request->input('content_blog_en');
        $Setting->content_blog_gr = $request->input('content_blog_gr');
        $Setting->content_blog_ar = $request->input('content_blog_ar');
        $Setting->content_feature_en = $request->input('content_feature_en');
        $Setting->content_feature_gr = $request->input('content_feature_gr');
        $Setting->content_feature_ar = $request->input('content_feature_ar');
        $Setting->content_feature_two_en = $request->input('content_feature_two_en');
        $Setting->content_feature_two_gr = $request->input('content_feature_two_gr');
        $Setting->content_feature_two_ar = $request->input('content_feature_two_ar');
        $Setting->content_feature_three_en = $request->input('content_feature_three_en');
        $Setting->content_feature_three_gr = $request->input('content_feature_three_gr');
        $Setting->content_feature_three_ar = $request->input('content_feature_three_ar');
        $Setting->save();
        //validate
        $this->validate($request, [
            'HomePicture' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);
        //validate
        $this->validate($request, [
            'AboutPicture' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
         if ($request->file('LogoPicture')){  
          $file = $request->file('LogoPicture');
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Setting->LogoPicture = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }else{
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }
       // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
         if ($request->file('FaviconOne')){  
          $file = $request->file('FaviconOne');
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Setting->FaviconOne = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }else{
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }
       // THIS FUNCTION UPDATE NEW IMAGE FaviconTwo IN PAGE FaviconTwo UPDATE //
         if ($request->file('FaviconTwo')){  
          $file = $request->file('FaviconTwo');
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Setting->FaviconTwo = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }else{
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }
       // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
         if ($request->file('FaviconThree')){  
          $file = $request->file('FaviconThree');
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Setting->FaviconThree = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }else{
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }
       // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
         if ($request->file('HomePicture')){  
          $file = $request->file('HomePicture');
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Setting->HomePicture = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }else{
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }
       // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
         if ($request->file('AboutPicture')){  
          $file = $request->file('AboutPicture');
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Setting->AboutPicture = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }else{
          // THIS TO SAVE  Settings UPDATE //
          $Setting->save();
       }
       $Setting->save();
       // THIS FUNCTION update setting IN PAGE setting //
          return redirect()->TO('dashboard/dashboardSettings')

                        ->with('Settings','Settings created successfully.');
    }
}
