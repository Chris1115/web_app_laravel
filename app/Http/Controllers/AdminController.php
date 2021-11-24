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
    public function display($page){
        switch ($page) {
            case 'dashboard':
                return view('admin/dashboard',[
                    "title" => "Admin || Dashboard"
                ]);

            case 'forum':
                return view('admin/forum', [
                    "title" => "Admin || Forum",
                    "data" => Forum::getAll()
                ]);

            case 'course':
                return view('admin/course', [
                    "title" => "Admin || course",
                    "data" => Course::getAll()
                ]);

            case 'news':
                return view('admin/news', [
                    "title" => "Admin || News",
                    "data" => news::getAll()
                ]);

            case 'account':
                return view('admin/account', [
                    "title" => "Admin || Accounts",
                    "data" => User::getAll()
                ]);

            case 'create':
                return view('admin/create', [
                    "title" => "Admin || Add Data",
                ]);
            
            default:
                # code...
                break;
        }
    }

    public function createRoutes($table){
        switch ($table) {
            case 'forum':
                return view('admin/forummenu', [
                    "title" => "Admin || create",
                    "table" => $table
                ]);
            
            case 'news':
                return view('admin/newsmenu', [
                    "title" => "Admin || create",
                    "table" => $table
                ]);
                
            case 'course':
                return view('admin/coursemenu', [
                    "title" => "Admin || create",
                    "table" => $table
                ]);
                
            default:
                return redirect('/admin');
        }
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

    public function Add(Request $request)
    {
        switch ($request['table']) {
            case 'forum':
                Forum::add($request['title'], $request['question']);
                break;

            case 'news':
                news::add($request['headline'], $request['content']);
                break;

            case 'course':
                Course::add($request['name'], $request['description']);
                break;

            default:
                return redirect('/admin');
        }

        return redirect('/admin/'.$request['table']);
    }

    public function edit($table, $id)
    {
        
    }
}
