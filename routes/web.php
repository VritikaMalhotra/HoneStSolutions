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
    return view('app');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/blogs-details', function () {
    return view('blogs-details');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/people', function () {
    return view('people');
});