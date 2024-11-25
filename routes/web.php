<?php

use Illuminate\Support\Facades\Route;

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/event', function(){
    return view('event');
})->name('event');

Route::get('/artikel', function(){
    return view('artikel');
})->name('artikel');

Route::get('/relawan', function(){
    return view('relawan');
})->name('relawan');

Route::get('/magang', function(){
    return view('magang');
})->name('magang');

Route::get('/mitra', function(){
    return view('mitra');
})->name('mitra');

Route::get('/donasi', function(){
    return view('donasi');
})->name('donasi');

Route::get('/testing', function(){
    return view('testing');
})->name('testing');