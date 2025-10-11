<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController; // <-- voeg dit hier toe!

// Routes voor planeten
Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planet}', [PlanetController::class, 'show']);

// Optioneel: homepage
Route::get('/', function () {
    return view('welcome');
});
