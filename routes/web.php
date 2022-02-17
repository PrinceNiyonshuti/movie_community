<?php

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

Route::prefix('/movies')->group(function () {
    Route::get('', function () {
        return view('moviesList');
    });
    Route::get('/single', function () {
        return view('movieSingle');
    });
});

Route::prefix('/account')->group(function () {
    Route::get('', function () {
        return view('account.index');
    });
    Route::get('/profile', function () {
        return view('account.profile');
    });
});

Route::prefix('/movie')->group(function () {
    Route::get('', function () {
        return view('movie.index');
    });
    Route::get('/single', function () {
        return view('movieSingle');
    });
});
