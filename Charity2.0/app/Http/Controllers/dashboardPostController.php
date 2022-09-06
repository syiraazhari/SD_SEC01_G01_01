<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IsAdmin;
use App\setting;
use App\Category;
use App\Role;
use App\User;
use App\Post;
use File;
use Auth;
use Validator;

class dashboardPostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    **/
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
        // GET Posts
        $Posts = Post::with('Category')->with('User')->simplePaginate(10);
        return view('dashboard.dashboardPosts.index',compact('Posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET Users
        $Users = User::all();
        // GET Categores
        $Categores = Category::all();
        return view('dashboard.dashboardPosts.create',compact('Users','Categores'));
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
        // New Post
        $Post = new Post;
        $Post->Title_en = $request->input('Title_en');
        $Post->Title_ar = $request->input('Title_ar');
        $Post->Title_gr = $request->input('Title_gr');
        $Post->author_id = $request->input('author_id');
        $Post->category_id = $request->input('category_id');
        $Post->slug = $request->input('slug');
        $Post->seo_title = $request->input('seo_title');
        $Post->excerpt = $request->input('excerpt');
        $Post->body_en = $request->input('body_en');
        $Post->body_ar = $request->input('body_ar');
        $Post->body_gr = $request->input('body_gr');
        $Post->meta_description = $request->input('meta_description');
        $Post->meta_keywords = $request->input('meta_keywords');
        $Post->featured = $request->input('featured');
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
          $file = $request->file('image');
          $date = date('FY');
          $destinationPath = 'storage/posts/'.$date.'/';
          $viewimage = 'storage/posts/'.$date.'/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Post->image = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $Post->save(); 
        }else{
          $Post->save();  
        }
          $Post->save();

                return redirect()->TO('dashboard/dashboardPosts')

                        ->with('success','Post created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //To Get All Post 
        $Post = Post::where('slug', '=', $slug)->firstOrFail();
        // Users
        $Users = User::all();
        // Categores
        $Categores = Category::all();
        return view('dashboard.dashboardPosts.edit',compact('Post','Users','Categores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // EDIT Post
        $Post = Post::where('slug', '=', $slug)->firstOrFail();
        //validate
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);
        $Post->Title_en = $request->input('Title_en');
        $Post->Title_ar = $request->input('Title_ar');
        $Post->Title_gr = $request->input('Title_gr');
        $Post->author_id = $request->input('author_id');
        $Post->category_id = $request->input('category_id');
        $Post->slug = $request->input('slug');
        $Post->seo_title = $request->input('seo_title');
        $Post->excerpt = $request->input('excerpt');
        $Post->body_en = $request->input('body_en');
        $Post->body_ar = $request->input('body_ar');
        $Post->body_gr = $request->input('body_gr');
        $Post->meta_description = $request->input('meta_description');
        $Post->meta_keywords = $request->input('meta_keywords');
        $Post->featured = $request->input('featured');
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
          File::delete($Post->image);
          $file = $request->file('image');
          $date = date('FY');
          $destinationPath = 'storage/posts/'.$date.'/';
          $viewimage = 'storage/posts/'.$date.'/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Post->image = $filename;
          // THIS TO SAVE  Settings UPDATE //

          $Post->save(); 
        }else{
          $Post->save();  
        }
          $Post->save();

                return redirect()->TO('dashboard/dashboardPosts')

                        ->with('success','Post created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                  // Post Delete
        $Post = Post::findOrFail($id);
        File::delete($Post->image);
        $Post->delete();
        return back()->with('Delete','Post Deleted successfully');
    }
}
