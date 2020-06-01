<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact','Frontendcontroller@indexcontactus');
Route::get('/about','Frontendcontroller@indexaboutus');