<?php

use Illuminate\Support\Facades\Route;

// Definieer de array met planeten
$planets = [
    'mars' => [
        'name' => 'Mars',
        'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
    ],
    'venus' => [
        'name' => 'Venus',
        'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
    ],
    'earth' => [
        'name' => 'Earth',
        'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that\'s inhabited by living things.'
    ],
    'jupiter' => [
        'name' => 'Jupiter',
        'description' => "Jupiter is a gas giant and doesn't have a solid surface, but it may have a solid inner core about the size of Earth."
    ],
];

// Route voor het overzicht van alle planeten
Route::get('/planets', function () use ($planets) {
    return view('planets', ['planets' => $planets]);
});

// Dynamische route voor één specifieke planeet
Route::get('/planets/{planet}', function ($planet) use ($planets) {
    $planet = strtolower($planet);

    if (!array_key_exists($planet, $planets)) {
        abort(404, 'Planet not found');
    }

    $selectedPlanet = $planets[$planet];
    return view('planets', ['planets' => [$selectedPlanet]]);
});

// Optioneel: homepage
Route::get('/', function () {
    return view('welcome');
});
