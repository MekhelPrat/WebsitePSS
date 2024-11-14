<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/event', function(){
    return view('event');
})->name('event');;

Route::get('/artikel', function(){
    return view('artikel');
})->name('artikel');;

Route::get('/about', function(){
    return view('about');
})->name('about');;

Route::get('/gabung', function(){
    return view('gabung');
})->name('gabung');;

