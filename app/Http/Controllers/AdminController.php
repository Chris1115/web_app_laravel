<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin/dashboard', [
            "title" => "Admin || Dashboard"
        ]);
    }

    public function forum(){
        return view('admin/forum', [
            "title" => "Admin || Forum",
            "data" => Forum::getAll()
        ]);
    }

    public function course(){
        return view('admin/course', [
            "title" => "Admin || course",
            "data" => Course::getAll()
        ]);
    }

    //Account Menu  
    public function account(){
        return view('admin/account', [
            "title" => "Admin || Accounts",
            "data" => User::getAll()
        ]);
    }
    public function deleteUser($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin/account');
    }
}
