<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController as Event;
use App\Http\Controllers\JobController as Job;
use App\Http\Controllers\LearnController as Learning;
use App\Http\Controllers\QuestController as Quest;
use App\Http\Controllers\ExploreController as Explore;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/event', [Event::class, 'index'])->name('event');
Route::get('/explore', [Explore::class, 'index'])->name('explore');
Route::get('/job', [Job::class, 'index'])->name('job');
Route::get('/learning', [Learning::class, 'index'])->name('learn');
Route::get('/learning/{type}', [Learning::class, 'single'])->name('learnWithType');
Route::get('/quest', [Quest::class, 'index'])->name('quest');
Route::get('/answer', [Quest::class, 'answer'])->name('answer');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::post('/explore', [Explore::class, 'create_explore']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
});
// Main Routess

Route::get('/detailjob', function () {
    return view('job/detail.index');
})->name('detailjob');

Route::get('/detaillearn', function () {
    return view('learning/detail.index');
})->name('detaillearn');



// Auth Routes
Route::middleware(['guest'])->group(function () {
    Route::resource('/register', RegisterController::class)->only(['index', 'store']);
    Route::resource('/login', LoginController::class)->except('destroy');
});


// Route::get('/user', [UserController::class, 'index'])->middleware('auth');
// Route::get('/user/profile', function () {
//     return view('user/profile');
// });
// Route::get('/user/bookmart', function () {
//     return view('user/bookmart');
// });
// Route::get('/user/create', function () {
//     return view('user/create/thread/createThreadPhoto');
// });

// // Component Routes
// Route::get('/sidebar', [ComponentController::class, 'sidebar']);