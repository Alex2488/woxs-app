<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing.index.index');
});

Route::get('/services', function () {
    return view('landing.index.services');
});

Route::get('/about', function () {
    return view('landing.index.about');
});

Route::get('/blog', function () {
    return view('landing.index.blog');
});

Route::get('/contact', function () {
    return view('landing.index.contact');
});
