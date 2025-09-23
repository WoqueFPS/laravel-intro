<?php

use Illuminate\Support\Facades\Route;

Route::get('/planets/{planet?}', function ($planet = null) {
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
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that\'s inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => "Jupiter is a gas giant and doesn't have a solid surface, but it may have a solid inner core about the size of Earth."
        ],
    ];

    $collection = collect($planets);

    // Als ?planet=... in de URL staat
    if (request()->has('planet')) {
        $filtered = $collection->where('name', ucfirst(request('planet')))->toArray();
        return view('planets', ['planets' => $filtered]);
    }

    // Als er een /planets/mars parameter is
    if ($planet) {
        $filtered = $collection->where('name', ucfirst($planet))->toArray();
        return view('planets', ['planets' => $filtered]);
    }

    // Anders: toon alle planeten
    return view('planets', ['planets' => $collection->toArray()]);
});

Route::get('/', function () {
    return view('welcome');
});
