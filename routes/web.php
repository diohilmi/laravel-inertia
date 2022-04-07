<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);
Route::resource('/posts', \App\Http\Controllers\PostController::class);

//route index register
Route::get('/regoster', [\App\Http\Controllers\Auth\RegisterController::class, 'index']);
//route store register
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store']);

//route index login
Route::get('/', [\App\Http\Controllers\Auth\LoginController::class, 'index']);

//route store login
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'store']);

//route logout
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'destroy'])->middleware('auth');