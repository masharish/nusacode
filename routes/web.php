<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// CRUD Contact

Route::resource('contacts', ContactController::class);









Route::prefix('test')->group(function(){
    Route::get('/a', function () {
        return 'test1';});
        Route::get('/b', function () {
            return 'test nomer 2';});

});

