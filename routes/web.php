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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/elements', function () {
    return view('elements');
})->name('elements');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/packages', function () {
    return view('packages');
})->name('packages');
 
