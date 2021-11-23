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
            "name" => $name,
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

    public function classes(){
        return $this->hasMany(classes::class);
    }
}
