<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class classes extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public static function add($user_id, $course_id){
        Course::create([
            "users_id" => $user_id,
            "courses_id" => $course_id
        ]);
    }

    public static function getAll(){
        $course = DB::table('courses')->get();
        return $course;
    }

    public static function deleteById($id){
        DB::table('courses')->where('id', $id)->delete();
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Course(){
        return $this->belongsTo(Course::class);
    }
}
