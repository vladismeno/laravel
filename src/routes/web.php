<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $res = 1 + 3;
    $name = 'svs';
    return view('home', compact('res', 'name'));
});


Route::get('/about', function () {
    return '<h1>About page</h1>';
});
