<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Test;
use App\Http\Controllers\Test\TestController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    $res = 1 + 3;
    $name = 'svs';
    return view('home', compact('res', 'name'));
})->name('home');


Route::get('/about', function () {
    return '<h1>About page</h1>';
});*/

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

/*Route::match(['get', 'post', 'put'], '/contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }

    return view('contact');
})->name('contact');*/

//Route::view('/test', 'test', ['test' => 'Test Data']);

//Route::redirect('about', 'contact');
//Route::redirect('about', 'contact', 301);

//Route::permanentRedirect('about', 'contact');


/*Route::get('/post/{id}', function ($id) {
    return "Post {$id}";
});*/

/*Route::get('/post/{id}/{slug}', function ($id, $slug) {
    return "Post $id | $slug";
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-]+']);*/


/*Route::get('/post/{id}/{slug?}', function ($id, $slug = null) {
    return "Post $id | $slug";
})->name('post');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/posts', function () {
        return 'Post List';
    });

    Route::get('/post/create', function () {
        return 'Post Create';
    });

    Route::get('/post/{id}/edit', function ($id) {
        return "Edit Post $id";
    })->name('post');
});


Route::fallback(function () {
    abort(404, 'Oops! Page not found!');
//    return redirect()->route('home');
});*/


Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/test2', [Test\TestController::class, 'index']);
Route::get('/page/{slug}', [PageController::class, 'show']);
