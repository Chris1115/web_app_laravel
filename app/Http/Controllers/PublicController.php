<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('public/landing', [
            "title" => "BisnisCap"
        ]);
    }

    public function about(){
        return view('public/about',[
            "title" => "About"
        ]);
    }

    public function login(){
        return view('public/login',[
            "title" => "Login"
        ]);
    }

    public function register(){
        return view('public/register',[
            "title" => "Legister"
        ]);
    }
}
