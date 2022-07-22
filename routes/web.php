<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MovieController;
use App\Models\Movie;
use App\Models\User;
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
    return view('index', [
        'movies' => Movie::latest()->get(),
        'members' => User::latest()->get(),
    ]);
})->name('index');

Route::post('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->prefix('/account')->group(function () {
    Route::get('', [DashboardController::class, 'index']);
    Route::get('/profile', [DashboardController::class, 'create']);
    Route::post('/{movie}', [DashboardController::class, 'update']);
});

// Movie actions
Route::middleware('auth')->prefix('/movie')->group(function () {
    Route::get('', [MovieController::class, 'index']);
    Route::get('/new', [MovieController::class, 'create']);
    Route::post('/store', [MovieController::class, 'store']);
    Route::get('/{movie}/edit', [MovieController::class, 'edit']);
    Route::patch('/{movie}', [MovieController::class, 'update']);
    Route::delete('/{movie}', [MovieController::class, 'destroy']);
});

// Genre actions
Route::resource('genre', GenreController::class)->middleware('IsAdmin');
Route::prefix('/movies')->group(function () {
    Route::get('', [GuestController::class, 'index']);
    Route::get('/{movie:name}', [GuestController::class, 'show']);
    Route::post('/search', [GuestController::class, 'search']);
});

Route::get('/member/{user:username}', [GuestController::class, 'member']);
Route::get('/category/{genre:name}', [GenreController::class, 'movies']);

// Favorite actions
