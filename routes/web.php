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
Route::get('/login', [PublicController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [PublicController::class, 'user_login'])->middleware('guest');
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/register', [PublicController::class, 'register'])->middleware('guest');
Route::post('/register', [PublicController::class, 'addUser'])->middleware('guest');


// Routes for admin access page
Route::get('/admin/{page}', [AdminController::class, 'display'])->middleware('auth');
Route::get('/admin/class/insert', [AdminController::class, 'insrtclass'])->middleware('auth');

Route::get('/admin/{table}/delete/{id}', [AdminController::class, 'delete'])->middleware('auth');
Route::get('/admin/{table}/edit/{id}', [AdminController::class, 'edit'])->middleware('auth');
Route::post('/admin/{table}/edited', [AdminController::class, 'edited'])->middleware('auth');
Route::get('/admin/news/view/{id}', [AdminController::class, 'viewcomments'])->middleware('auth');

Route::post('/admin/{table}/add', [AdminController::class, 'add'])->middleware('auth');
Route::get('/admin/{table}/add', [AdminController::class, 'createRoutes'])->middleware('auth');



// Routes for User access Page
Route::get('/user/{page}', [UserController::class, 'display'])->middleware('auth');
Route::get('/user/forum/{id}', [UserController::class, 'forumdtl'])->middleware('auth');
Route::get('/user/news/{id}', [UserController::class, 'newsdtl'])->middleware('auth');
Route::get('/user/course/class/{id}', [UserController::class, 'class'])->middleware('auth');
Route::get('/user/myclass/{id}', [UserController::class, 'myclass'])->middleware('auth');

Route::post('/user/addChat', [UserController::class, 'addChat'])->middleware('auth');
Route::post('/user/addComment', [UserController::class, 'addcomment'])->middleware('auth');
Route::post('/user/addClass', [UserController::class, 'addClass'])->middleware('auth');
Route::get('/user/course/{id}', [UserController::class, 'coursedtl'])->middleware('auth');