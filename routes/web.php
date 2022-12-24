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
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/project', function () {
    return view('project.index');
});

Route::get('/youtube', function () {
    return view('youtube.index');
});

Route::get('/content', function () {
    return view('content.content');
});
