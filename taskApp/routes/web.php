<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/about','Frontendcontroller@indexaboutus');