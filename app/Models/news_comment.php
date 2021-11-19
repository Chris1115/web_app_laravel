<?php

namespace App\Models;

use App\Models\User;
use App\Models\news;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class news_comment extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public static function add($users_id, $news_id){
        news_comment::create([
            "users_id" => $users_id,
            "news_id" => $news_id
        ]);
    }

    public static function getAll(){
        $news = DB::table('news_comments')->get();
        return $news;
    }

    public static function deleteById($id){
        DB::table('news_comments')->where('id', $id)->delete();
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function news(){
        return $this->belongsTo(news::class);
    }
}
