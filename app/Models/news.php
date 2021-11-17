<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    // use HasFactory;
    public static function deleteById($id){
        DB::table('news')->where('id', $id)->delete();
    }
}
