<?php

use Illuminate\Support\Facades\Route;

// Route::domain('cash.laravel-11.test', function() {
//     Route::get('/', function() {
//         return view('welcome');
//     });
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function() {
    return view('about');
});