<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Course;
use App\Models\User;
use App\Models\news;
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

      
    public function account(){
        return view('admin/account', [
            "title" => "Admin || Accounts",
            "data" => User::getAll()
        ]);
    }

    public function edit($table, $id)
    {
        
    }
    public function delete($table, $id)
    {
        switch ($table) {
            case 'account':
                User::deleteById($id);
                break;
    
            case 'forum':
                Forum::deleteById($id);
                break;
                
            case 'news':
                news::deleteById($id);
                break;
                
            case 'course':
                Course::deleteById($id);
                break;
                
            default:
                # code...
                break;
        }

        return redirect('/admin/'.$table);
    }
}
