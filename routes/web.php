<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/blogs-details', function () {
    return view('blogs-details');
});

Route::get('/blogs-details2', function () {
    return view('blogs-details2');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/people', function () {
    return view('people');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/books', function () {
    return view('books');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/our-journey', function () {
    return view('our-journey');
});

Route::get('/attend-form', function () {
    return view('attend-form');
});

Route::get('/succes-attend-form', function () {
    return view('succes-attend-form');
});


Route::get('/sendemail',[SendEmailController::class, 'index']);
Route::post('/sendemail/send',[SendEmailController::class, 'send']);
