<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile/{id}', [HomeController::class, 'getProfile']);

Route::get('/data-diri', [HomeController::class, 'dataDiri']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/create', [PostController::class, 'createPost']);

Route::post('/post', [PostController::class, 'store']);

Route::get('/post/{id_post}', [PostController::class, 'getById']);

Route::get('/post/{id_post}/edit', [PostController::class, 'editPost']);

Route::put('/post/{id_post}', [PostController::class, 'update']);

Route::delete('/post/{id_post}', [PostController::class, 'deleteById']);
