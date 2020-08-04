<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');
Route::prefix('prev')->group(function () {

    Route::view('/resume', 'prev.resume');
});
// Route::view('/resume', 'prev.resume');
Route::view('/projects', 'projects');
Route::view('/mobile', 'mobile');
Route::view('/me', 'me');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
