<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('public/landing', [
        "title" => "BisnisCap"
    ]);
});

Route::get('/about', function () {
    return view('public/about',[
        "title" => "About"
    ]);
});

Route::get('/login', function () {
    return view('public/login',[
        "title" => "Login"
    ]);
});

Route::get('/register', function () {
    return view('public/register',[
        "title" => "Legister"
    ]);
});

Route::get('/course', function () {
    return view('user/course',[
        "title" => "Course"
    ]);
});

Route::get('/forum', function () {
    return view('user/forum',[
        "title" => "Forum"
    ]);
});

Route::get('/home', function () {
    return view('user/home',[
        "title" => "Home"
    ]);
});

Route::get('/news', function () {
    return view('user/news',[
        "title" => "News"
    ]);
});