<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Forum extends Model
{
    // use HasFactory;

    protected $guarded = ['id'];

    public static function add($title, $question){
        Forum::create([
            "title" => $title,
            "question" => $question
        ]);
    }

    public static function getAll(){
        $forums = DB::table('forums')->get();
        return $forums;
    }

    public static function deleteById($id){
        DB::table('forums')->where('id', $id)->delete();
    }
}
