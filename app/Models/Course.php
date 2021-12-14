<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];

    public static function add($name, $description){
        Course::create([
            "names" => $name,
            "description" => $description
        ]);
    }

    public static function getAll(){
        $course = DB::table('courses')->get();
        return $course;
    }

    public static function deleteById($id){
        DB::table('courses')->where('id', $id)->delete();
    }

    public static function getById($id){
        $course = DB::table('courses')->where('id', $id)->first();

        return $course;
    }

    public static function updateData($names, $description, $id){
        DB::table('courses')->where('id', $id)->update(['names' => $names, 'description' => $description]);
    }

    public function classes(){
        return $this->hasMany(classes::class);
    }
}
