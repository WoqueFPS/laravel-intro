<?php

use Illuminate\Support\Facades\Route;

Route::get('/planets', function () {
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => "Jupiter is a gas giant and doesn't have a solid surface, but it may have a solid inner core about the size of Earth."
        ],
    ];

    return view('planets', compact('planets'));
});
Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome'); 
});

?>