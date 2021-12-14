<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Forum extends Model
{
    // use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';


    public static function add($title, $question){
        Forum::create([
            "title" => $title,
            "question" => $question
        ]);
    }

    public static function updateData($title, $question, $id){
        DB::table('forums')->where('id', $id)->update(['title' => $title, 'question' => $question]);
    }

    public static function getAll(){
        $forums = DB::table('forums')->get();
        return $forums;
    }

    public static function getById($id){
        $forum = DB::table('forums')->where('id', $id)->first();

        return $forum;
    }

    public static function deleteById($id){
        DB::table('forums')->where('id', $id)->delete();
    }

    public function forum_chats(){
        return $this->hasMany(forum_chat::class);
    }
}
