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
    Route::get('/series', function () {
        return view('movieSeries');
    });
});

Route::prefix('/news')->group(function () {
    Route::get('', function () {
        return view('news');
    });
    Route::get('/single', function () {
        return view('newsSingle');
    });
    Route::get('/series', function () {
        return view('movieSeries');
    });
});


Route::get('/community', function () {
    return view('community');
});
