<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

    
});

Route::get('/planeten', function () {
    return 
    ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});
