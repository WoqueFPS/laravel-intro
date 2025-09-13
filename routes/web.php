<?php

use Illuminate\Support\Facades\Route;

Route::get('/planeten', function () {
    return 
    ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome'); 
});