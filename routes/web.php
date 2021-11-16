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
Route::get('/admin', [AdminController::class, 'dashboard'])->middleware('auth');

Route::get('/admin/forum', [AdminController::class, 'forum'])->middleware('auth');
Route::get('/admin/forum/edit/{id}', [AdminController::class, 'forum'])->middleware('auth');
Route::get('/admin/forum/delete/{id}', [AdminController::class, 'forum'])->middleware('auth');

Route::get('/admin/news', [AdminController::class, 'news'])->middleware('auth');
Route::get('/admin/news/edit/{id}', [AdminController::class, 'news'])->middleware('auth');
Route::get('/admin/news/delete/{id}', [AdminController::class, 'news'])->middleware('auth');

Route::get('/admin/course', [AdminController::class, 'course'])->middleware('auth');
Route::get('/admin/course/edit/{id}', [AdminController::class, 'course'])->middleware('auth');
Route::get('/admin/course/delete/{id}', [AdminController::class, 'course'])->middleware('auth');

Route::get('/admin/account', [AdminController::class, 'account'])->middleware('auth');
Route::get('/admin/account/edit/{id}', [AdminController::class, 'edit'])->middleware('auth');
Route::get('/admin/account/delete/{id}', [AdminController::class, 'deleteUser'])->middleware('auth');



// Routes for User access Page
Route::get('/course', [UserController::class, 'course'])->middleware('auth');
Route::get('/forum', [UserController::class, 'forum'])->middleware('auth');
Route::get('/home', [UserController::class, 'home'])->middleware('auth');
Route::get('/news', [UserController::class, 'news'])->middleware('auth');