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

Route::get('/webcovidub', function () {
    return view('home');
})->name('home');

Route::get('/webcovidub/about', function () {
    return view('about');
})->name('about');

Route::get('/webcovidub/data', function () {
    return view('data');
})->name('data');

Route::get('/webcovidub/detector', function () {
    return view('detector');
})->name('detector');
Route::get('/webcovidub/tips', function () {
    return view('tips');
})->name('tips');
Route::get('/webcovidub/contacts', function () {
    return view('contacts');
})->name('contacts');

