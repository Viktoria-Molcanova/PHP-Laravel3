<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'Виктория',
        'age' => 25,
        'position' => 'Разработчик',
        'address' => 'Красноярск'
    ]);
});

Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'Красноярск',
        'post_code' => '101000',
        'email' => '',
        'phone' => '+7 (950) 123-45-67'
    ]);
});
