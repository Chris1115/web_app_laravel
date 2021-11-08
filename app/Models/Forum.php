<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Forum extends Model
{
    // use HasFactory;

    
    public static function getAll(){
        $forums = DB::table('forums')->get();
        return $forums;
    }
}
