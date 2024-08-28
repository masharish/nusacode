<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home"
//     ]);})->name('home');

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog"
    ]);})->name('blog');

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
})->name('about');

Route::get('/contact', function () {
    return view('contacts');
})->name('contact');

// CRUD Contact

Route::resource('contacts', ContactController::class);

Route::get('/dashboard', function() {
    return view('dashboard.index');
});

Route::get('/', function() {
    return view('layouts.main1');
});

Route::get('/berita', function() {
    return view('dashboard.berita.index');
});






Route::prefix('test')->group(function(){
    Route::get('/a', function () {
        return 'test1';});
        Route::get('/b', function () {
            return 'test nomer 2';});

});

