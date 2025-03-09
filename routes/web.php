<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/contact',function () {

    $data = [
        'name' => 'Mohamed',
        'email' => 'mouhame@gmail.com',
        'phone' => '0656565656'
    ];
    return view('contact', ['data' => $data]);
});




// Route::get('/blog/{name}',function ($name) {
//     return "<h1>". 'Welcome in blog '  . $name .' !'. "</h1>" ;
// })->where('name','[a-zA-Z]+');