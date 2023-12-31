<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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



Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/{post}', [PostController::class, 'show']);
Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'logout'])->middleware('auth');
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/posts/{post:slug}/comment',[CommentController::class,'store'])->middleware('auth');

Route::get('admin/posts/create', [PostController::class,"create"])->middleware('admin');
Route::post('admin/posts', [PostController::class,"store"])->middleware('admin');