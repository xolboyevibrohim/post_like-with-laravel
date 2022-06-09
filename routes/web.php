<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistrController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\PostLikeController;

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
    return view('home');
})->name('home');

Route::get('/register',[RegistrController::class,'index'])->name('register');
Route::post('/register',[RegistrController::class,'store'])->name('register');


Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/user/{user:username}/post',[UserPostController::class,'index'])->name('user.post');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('login_');

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/post',[PostController::class,'index'])->name('post');
Route::post('/post',[PostController::class,'store']);
Route::post('/post/{post}/likes',[PostLikeController::class,'store'])->name('post.likes');
Route::delete('/post/{post}/likes',[PostLikeController::class,'destroy'])->name('post.likes');

Route::delete('/post/{post}',[PostController::class,'destroy'])->name('post.destroy');






