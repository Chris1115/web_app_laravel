<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    // use HasFactory;
    private static $classes = [
    [
        "name" => "Business Model",
        "mentor" => "A"
    ]
    ];

    public static function getAll(){
        return self::$classes;
    }
}
