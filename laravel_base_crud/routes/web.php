<?php

use Illuminate\Support\Facades\Route;

Route::get('/','cagnolini_controller@index')->name('home');

Route::get('/', function () {
    return view('home');
});
