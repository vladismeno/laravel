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

/*Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-email', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return 'Send Email';
});*/

/*Route::match(['get', 'post'], '/contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }

    return view('contact');
});*/

/*Route::match(['get', 'post'], '/contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }

    return view('contact');
})->name('contact');*/

//Route::view('/test', 'test', ['test' => 'Test Data']);

//Route::redirect('about', 'contact');
//Route::redirect('about', 'contact', 301);

//Route::permanentRedirect('about', 'contact');

