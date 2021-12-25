<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsersController;
use \App\Http\Controllers\LandingController;
use \App\Http\Controllers\PostController;

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

Route::get('/', [LandingController::class, 'getLandingPage']);
Route::get('/about', [LandingController::class, 'getAboutPage']);
Route::get('/posts', [PostController::class, 'getPosts']);
Route::get('/posts/{post}', [PostController::class, 'getPost']);
Route::post('/posts', [PostController::class, 'postBlogPost'])->name('new-post');

/* Route::get('/user/{username}', [UsersController::class, 'getProfile'])->name('user-profile');
Route::get('/user/me', [UsersController::class, 'getMeProfile']);
Route::get('/test', [UsersController::class, 'test']); */
