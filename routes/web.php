<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/blog/{id}', function ($id) {
    return view('blog.show', ['id' => $id]);
});

Route::get('/about', function () {
    return view('about');
});
