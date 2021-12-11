<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class takenclass extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public static function add( $course_id, $uname, $name, $mentor, $schedule){
        takenclass::create([
            "course_id" => $course_id,
            "username" => $uname,
            "name" => $name,
            "mentor" => $mentor,
            "schedule" => $schedule,
        ]);
    }

    public static function getById($id){
        $class = DB::table('takenclasses')->where('username', $id)->get();

        return $class;
    }

    public static function getAll(){
        $class = DB::table('takenclasses')->get();
        return $class;
    }
    

    public static function deleteById($id){
        DB::table('takenclasses')->where('id', $id)->delete();
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Course(){
        return $this->belongsTo(Course::class);
    }
}
