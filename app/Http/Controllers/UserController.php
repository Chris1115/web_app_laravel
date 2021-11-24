<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Forum;
use App\Models\User;
use App\Models\forum_chat;
use App\Models\news;
use App\Models\news_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function display($page){
        switch ($page) {
            case 'course':
                return view('user/course',[
                    "title" => "Course",
                    "data" => Course::getAll()
                ]);
            
            case 'forum':
                return view('user/forum',[
                    "title" => "Forum",
                    "data" => Forum::getAll(),
                ]);
                
            case 'home':
                return view('user/home',[
                    "title" => "Dashboard"
                ]);

            case 'news':
                return view('user/news',[
                    "title" => "News",
                    "data" => news::getAll()
                ]);
            
            default:
                # code...
                break;
        }
    }
    
    public function forumdtl($id){
        return view('user/forumdtl', [
            "title" => "Admin || Forum Details",
            "response" => forum_chat::getComments($id),
            "forum" => Forum::getById($id)
        ]);
    }

    public function newsdtl($id){
        return view('user/newsdtl', [
            "title" => "News || Detail",
            "comment" => news_comment::getComments($id),
            "news" => news::getById($id)
        ]);
    }

    public function addChat(Request $request){
        forum_chat::add($request->user_id, $request->forum_id, $request->comment);
        return redirect('/user/forum/'.$request->forum_id);
    }

    public function addComment(Request $request){
        news_comment::add($request->user_id, $request->news_id, $request->comments);
        return redirect('/user/news/'.$request->news_id);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
