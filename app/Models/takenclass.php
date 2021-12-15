<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class takenclass extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public static function add( $users_id, $course_id,$class_id){
        takenclass::create([
            "users_id" => $users_id,
            "course_id" => $course_id,
            "class_id" => $class_id,
        ]);
    }

    public static function getById($id){
        $class = DB::table('takenclasses')->where('users_id', $id)->get();

        return $class;
    }

    public static function getAll(){
        $class = DB::table('takenclasses')->get();
        return $class;
    }
    

    public static function deleteById($id){
        DB::table('takenclasses')->where('id', $id)->delete();
    }

    public static function getByclass($id){
        $registeredClass = DB::table('takenclasses')
            ->join('users', 'takenclasses.users_id', '=', 'users.id')
            ->join('classes', 'takenclasses.class_id', '=', 'classes.id')
            ->join('courses', 'takenclasses.course_id', '=', 'courses.id')
            ->select('*')
            ->where('users_id', $id)
            ->get();

        return $registeredClass;
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function Course(){
        return $this->belongsTo(Course::class);
    }

    public function classes(){
        return $this->belongsTo(classes::class);
    }
}
