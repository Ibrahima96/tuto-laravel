<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller

{
 
    private static $data = [
        'name' => 'Bitcoin',
        'email' => 'bicoin@bicomlab.org',
        'phone' => '1234567890',
        'address' => 'Polorock, IGadesh'
    ];
    public function index()
    {
        $data = self::$data;
        return view('bicoin.contact',compact('data'));
    }

   
}
