<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contactus');
});
