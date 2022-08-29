<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

class messageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ADD Message
        Message::create([
            'Content' => $request->Content,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
        ]);
        return redirect()->back()->with('Messagge', 'Message');
    }

    
     public function destroy($id)
    {
        // Message Delete
        $Message = Message::findOrFail($id);
        $Message->delete();
        return back()->with('Delete','Message Deleted successfully');
    }

}
