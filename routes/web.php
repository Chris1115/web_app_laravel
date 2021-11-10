<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;

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
Route::get('/admin/user', [AdminController::class, 'user']);
Route::get('/admin/course', [AdminController::class, 'course']);



// Routes for User access Page
Route::get('/course', [UserController::class, 'course']);
Route::get('/forum', [UserController::class, 'forum']);
Route::get('/home', [UserController::class, 'home']);
Route::get('/news', [UserController::class, 'news']);