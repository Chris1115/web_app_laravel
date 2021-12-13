<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use CreateTakenclassTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class classes extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public static function add($user_id, $course_id){
        course::create([
            "id" => $user_id,
            "courses_id" => $course_id
        ]);
    }
    public static function getAll(){
        $class = DB::table('classes')->get();
        return $class;
    }

    
    public static function getById($id){
        $class = DB::table('classes')->where('course_id', $id)->get();

        return $class;
    }


    public static function deleteById($id){
        DB::table('classes')->where('id', $id)->delete();
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Course(){
        return $this->belongsTo(Course::class);
    }
}
