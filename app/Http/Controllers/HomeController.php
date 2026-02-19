<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//invoke: se ejecuta antes del constructor
class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}

