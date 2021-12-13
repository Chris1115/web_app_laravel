<?php

namespace App\Models;

use App\Models\User;
use App\Models\Forum;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class forum_chat extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public static function add($users_id, $forums_id, $chat){
        forum_chat::create([
            "users_id" => $users_id,
            "forums_id" => $forums_id,
            "response" => $chat
        ]);
    }

    public static function getAll(){
        $forum_chat = DB::table('forums_chats')->get();
        return $forum_chat;
    }

    public static function getComments($id){
        $chat = DB::table('forum_chats')
            ->join('forums', 'forum_chats.forums_id', '=', 'forums.id')
            ->join('users', 'forum_chats.users_id', '=', 'users.id')
            ->select('*')
            ->where('forums.id', $id)
            ->get();

        return $chat;
    }

    public static function deleteById($id){
        DB::table('forums_chats')->where('id', $id)->delete();
    }

    public static function deleteAllByForumId($id){
        DB::table('forum_chats')->where('forums_id', $id)->delete();
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function forums(){
        return $this->belongsTo(Forum::class);
    }
}
