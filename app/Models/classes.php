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

    public static function add($course_id, $mentor, $schedule){
        classes::create([
            "course_id" => $course_id,
            "mentor" => $mentor,
            "schedule" => $schedule
        ]);
    }
    public static function getAll(){
        $class = DB::table('classes')->get();
        return $class;
    }

    public static function getById($id){
        $news = DB::table('classes')->where('id', $id)->first();

        return $news;
    }

    
    public static function getclass($id){
        $class = DB::table('classes')
            ->join('courses', 'classes.course_id', '=', 'courses.id')
            ->select('*')
            ->where('course_id', $id)
            ->get();

        return $class;
    }

    public static function updateData($mentor, $schedule, $id){
        DB::table('classes')->where('id', $id)->update(['mentor' => $mentor, 'schedule' => $schedule]);
    }

    public static function deleteById($id){
        DB::table('classes')->where('id', $id)->delete();
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function Course(){
        return $this->belongsTo(Course::class);
    }

    public function takenclasses(){
        return $this->hasMany(takenclass::class);
    }
}
