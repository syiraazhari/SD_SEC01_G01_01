<?php


use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\setting;
use App\menu_item;
use App\menu;
use App\Cause;
use App\Message;
use App\Event;

	// This Function To return Setting data (( insert any data first in one row on database and call any data with Function Enjoy :))
	function Setting() {
	     	return $Setting = setting::find(1);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Menus()
    {

        $Menus = menu_item::where('menu_id', '=', 1)->get();
        return $Menus;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Menugermans()
    {

        $Menugermans = menu_item::where('menu_id', '=', 2)->get();
        return $Menugermans;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Menuarabics()
    {

        $Menuarabics = menu_item::where('menu_id', '=', 3)->get();
        return $Menuarabics;
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Users()
    {

        $Users = User::all();
        return $Users;
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Posts()
    {

        $Posts = Post::all();
        return $Posts;
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Causes()
    {

        $Causes = Cause::all();
        return $Causes;
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Messages()
    {

        $Messages = Message::all();
        return $Messages;
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Events()
    {

        $Events = Event::all();
        return $Events;
    }


