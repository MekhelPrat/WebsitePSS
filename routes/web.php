<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function(){
    return view('about');
})->name('about');

// Route::get('/event', function(){
//     return view('event');
// })->name('event');

Route::get('/event', [EventController::class, 'index'])->name('event');

// Route::resource('events',EventController::class)->shallow();

Route::get('/artikel', function(){
    return view('artikel');
})->name('artikel');

Route::get('/addberita', function(){
    return view('addberita');
})->name('addberita');

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

Route::get('/admin', function(){
    return view('admin');
})->name('admin');

Route::get('/adminHome', function(){
    return view('adminHome');
})->name('adminHome');

Route::get('/replastik', function(){
    return view('replastik');
})->name('replastik');

Route::get('/testing', function(){
    return view('testing');
})->name('testing');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/admin', function () {
//         return view('admin');
//     })->name('admin');

//     Route::get('/adminHome', function () {
//         return view('adminHome');
//     })->name('adminHome');

//     // Example: Testing page for admin
//     Route::get('/testing', function () {
//         return view('testing');
//     })->name('testing');
// });

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/store', [AdminController::class, 'store'])->name('admin.store.get');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store.post');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
