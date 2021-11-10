<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function course(){
        return view('user/course',[
            "title" => "Course"
        ]);
    }

    public function forum(){
        return view('user/forum',[
            "title" => "Forum"
        ]);
    }

    public function home(){
        return view('user/home',[
            "title" => "Home"
        ]);
    }

    public function news(){
        return view('user/news',[
            "title" => "News"
        ]);
    }
}
