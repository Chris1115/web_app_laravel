<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            "title" => "Register"
        ]);
    }

    public function addUser(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($valdated);

        $request->session()->flash('success', 'Registration successfull! Please Login');

        return redirect('/login');
    }
}
