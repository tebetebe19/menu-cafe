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
    return view('web-page.home-1');
});

Route::get('/home-2', function () {
    return view('web-page.home-2');
});

Route::get('/home-3', function () {
    return view('web-page.home-3');
});

Route::get('/menu', function () {
    return view('web-page.menu');
});

Route::get('/reservation', function () {
    return view('web-page.reservation');
});

Route::get('/blog', function () {
    return view('web-page.blog');
});

Route::get('/blog/detail', function () {
    return view('web-page.blog-detail');
});

Route::get('/gallery', function () {
    return view('web-page.gallery');
});

Route::get('/contact', function () {
    return view('web-page.contact');
});

