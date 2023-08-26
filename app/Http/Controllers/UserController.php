<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function aboutMethod()
    {
        return view('about');
    }
    public  function contact(){
        return view('contact');

    }
}
// php artisan make:controller UserController
// php artisan serve
