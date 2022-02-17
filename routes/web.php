<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MovieController;
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
    return view('index');
});

Route::post('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->prefix('/account')->group(function () {
    Route::get('', [DashboardController::class, 'index']);
    Route::get('/profile', [DashboardController::class, 'create']);
});

// Movie actions
Route::middleware('auth')->prefix('/movie')->group(function () {
    Route::get('', [MovieController::class, 'index']);
    Route::get('/new', [MovieController::class, 'create']);
    Route::post('/store', [MovieController::class, 'store']);
});


Route::prefix('/movies')->group(function () {
    Route::get('', function () {
        return view('moviesList');
    });
    Route::get('/single', function () {
        return view('movieSingle');
    });
});
