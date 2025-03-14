<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('bicoin.welcome');
});

Route::get('/home', function () {
    return view('bicoin.home');
});
Route::get('/about', function () {
    return view('bicoin.about');
});
Route::get('/contact', [UserController::class, 'index']);



// Route::get('/blog/{name}',function ($name) {
//     return "<h1>". 'Welcome in blog '  . $name .' !'. "</h1>" ;
// })->where('name','[a-zA-Z]+');