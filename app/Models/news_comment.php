<?php

namespace App\Models;

use App\Models\news;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class news_comment extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public static function add($users_id, $news_id, $comment){
        news_comment::create([
            "users_id" => $users_id,
            "news_id" => $news_id,
            "comment" => $comment
        ]);
    }

    public static function getAll(){
        $news = DB::table('news_comments')->get();
        return $news;
    }

    public static function getComments($id){
        $comments = DB::table('news_comments')
            ->join('news', 'news_comments.news_id', '=', 'news.id')
            ->join('users', 'news_comments.users_id', '=', 'users.id')
            ->select('*')
            ->where('news.id', $id)
            ->get();

        return $comments;
    }

    public static function deleteById($id){
        DB::table('news_comments')->where('id', $id)->delete();
    }

    public static function deleteAllByNewsId($id){
        DB::table('news_comments')->where('news_id', $id)->delete();
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function news(){
        return $this->belongsTo(news::class);
    }
}
