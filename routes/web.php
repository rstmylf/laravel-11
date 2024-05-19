<?php

use Illuminate\Support\Facades\Route;

// Route::domain('cash.laravel-11.test', function() {
//     Route::get('/', function() {
//         return view('welcome');
//     });
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function() {
    return view('about', [
        'title' => 'About'
    ]);
});

Route::get('/blog', function() {
    return view('blog', [
        'title' => 'Blog'
    ]);
});

Route::get('/contact', function() {
    return view('contact', [
        'title' => 'Contact'
    ]);
});