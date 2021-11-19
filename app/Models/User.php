<?php

namespace App\Models;

use App\Models\classes;
use App\Models\forum_chat;
use App\Models\news_comment;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getAll(){
        $accounts = DB::table('users')->get();
        return $accounts;
    }

    public static function deleteById($id){
        DB::table('users')->where('id', $id)->delete();
    }

    public function classes(){
        return $this->hasMany(classes::class);
    }

    public function forum_chats(){
        return $this->hasMany(forum_chat::class);
    }
 
    public function news_comments(){
        return $this->hasMany(news_comment::class);
    }
}
