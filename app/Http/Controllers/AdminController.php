<?php
namespace App\Http\Controllers;

use App\Models\classes;
use App\Models\Forum;
use App\Models\forum_chat;
use App\Models\Course;
use App\Models\news_comment;
use App\Models\User;
use App\Models\news;
use App\Models\takenclass;
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

                case 'class':
                    return view('admin/class', [
                        "title" => "Admin || Class",
                        "data" => classes::getAll()
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

            case 'class':
                return view('admin/insertclass', [
                    "title" => "Admin || AddClasses",
                    "dataf" => course::getAll()
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
                forum_chat::deleteAllByForumId($id);
                Forum::deleteById($id);
                break;
                
            case 'news':
                news_comment::deleteAllByNewsId($id);
                news::deleteById($id);
                break;

            case 'class':
                classes::deleteById($id);
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

            case 'class':
                classes::add($request['course_id'], $request['mentor'], $request['schedule']);
                break;

            default:
                return redirect('/admin');
        }

        return redirect('/admin/'.$request['table']);
    }

    public function viewcomments($id){
        return view('admin/newsdtl', [
            "title" => "Admin || News Comments",
            "commen" => news_comment::getById($id),
            "news" => news::getById($id)
        ]);
    }

    public function edit($table, $id)
    {
        switch ($table) {  
            case 'forum':
                return view('admin/forumedit', [
                    "title" => "Admin || Edit",
                    "data" => Forum::getById($id),
                    "table" => $table
                ]);
                
            case 'news':
                return view('admin/newsedit', [
                    "title" => "Admin || Edit",
                    "data" => news::getById($id),
                    "table" => $table
                ]);

            case 'class':
                return view('admin/classedit', [
                    "title" => "Admin || Edit",
                    "data" => classes::getById($id),
                    "table" => $table
                ]);
                break;
                
            case 'course':
                return view('admin/courseedit', [
                    "title" => "Admin || Edit",
                    "data" => Course::getById($id),
                    "table" => $table
                ]);
                break;
                
            default:
                # code...
                break;
        }
    }

    public function edited(Request $request)
    {
        switch ($request['table']) {
            case 'forum':
                Forum::updateData($request['title'], $request['question'], $request['id']);
                break;

            case 'news':
                news::updateData($request['headline'], $request['content'], $request['id']);
                break;

            case 'course':
                Course::updateData($request['names'], $request['description'], $request['id']);
                break;

            case 'class':
                classes::updateData($request['mentor'], $request['schedule'], $request['id']);
                break;

            default:
                return redirect('/admin');
        }

        return redirect('/admin/'.$request['table']);
    }
}