<?php

namespace App\Models;

use App\Models\news_comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class news extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public static function add($name, $mentor){
        news::create([
            "headline" => $name,
            "content" => $mentor
        ]);
    }

    public static function getAll(){
        $news = DB::table('news')->get();
        return $news;
    }

    public static function getById($id){
        $news = DB::table('news')->where('id', $id)->first();

        return $news;
    }

    public static function deleteById($id){
        DB::table('news')->where('id', $id)->delete();
    }

    public function news_comments(){
        return $this->hasMany(news_comment::class);
    }
}
