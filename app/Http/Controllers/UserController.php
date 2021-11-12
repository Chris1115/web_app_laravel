<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Forum;
use App\Models\User;

class UserController extends Controller
{
    public function course(){
        return view('user/course',[
            "title" => "Course",
            "data" => Courses::getAll()
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
