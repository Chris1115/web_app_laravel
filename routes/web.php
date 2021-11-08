<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;

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

// Routes for public access page
Route::get('/', [PublicController::class, 'index']);
Route::get('/about', [PublicController::class, 'about']);
Route::get('/login', [PublicController::class, 'login']);
Route::get('/register', [PublicController::class, 'register']);


// Routes for admin access page
Route::get('/admin/forum', [AdminController::class, 'forum']);



// Routes for User access Page
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