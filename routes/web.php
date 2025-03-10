<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bicoin.welcome');
});

Route::get('/home', function () {
    return view('bicoin.home');
});
Route::get('/about', function () {
    return view('bicoin.about');
});
Route::get('/contact',function () {

    $data = [
        'name' => 'Pluton',
        'email' => 'plutondelete@gmail.com',
        'address' => 'Rue de la paix',
        'phone' => '0656565656'

    ];
    return view('bicoin.contact', ['data' => $data]);
});






// Route::get('/blog/{name}',function ($name) {
//     return "<h1>". 'Welcome in blog '  . $name .' !'. "</h1>" ;
// })->where('name','[a-zA-Z]+');