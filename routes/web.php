<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',function () {
    return 'Welcome in blog ';
});
Route::get('/blog/{name}',function ($name) {
    return "<h1>". 'Welcome in blog '  . $name .' !'. "</h1>" ;
});