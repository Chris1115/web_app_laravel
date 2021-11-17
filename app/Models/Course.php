<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public static function add($name, $mentor){
        Course::create([
            "name" => $name,
            "mentor" => $mentor
        ]);
    }

    public static function getAll(){

        self::add('Basic Structure', 'Chris');
        self::add('Business Model', 'Ayub');

        $course = DB::table('courses')->get();
        return $course;
    }

    public static function deleteById($id){
        DB::table('courses')->where('id', $id)->delete();
    }
}
