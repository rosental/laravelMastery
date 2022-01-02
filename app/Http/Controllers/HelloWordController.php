<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWordController extends Controller
{
    public function helloWorld()
    {
        return view('hello-world');
    }

    public function hello($name = 'Fulano')
    {
        return 'Hello, ' . $name;
    }
}
