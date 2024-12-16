<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cobaRoute', function() {
    return "Hi! Saya route baru...";
});

Route::get('/panggilView', function() {
    return view('latihanView');
});