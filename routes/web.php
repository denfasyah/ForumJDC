<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Main Routess
Route::get('/', [MainController::class,'index']);

Route::get('/user', function () {
    return view('user/index');
});
Route::get('/user/profile', function () {
    return view('user/profile');
});
Route::get('/popular', function () {
    return view('user/popular');
});

Route::get('/user/bookmart', function () {
    return view('user/bookmart');
});
Route::get('/user/create', function () {
    return view('user/create/community/createCommunity');
});

// Component Routes
Route::get('/sidebar', [ComponentController::class,'sidebar']);

// Auth Routes
Route::resource('/register', RegisterController::class)->only(['index','store']);
Route::resource('/login', LoginController::class);