<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    //this is a single controller

    public function __invoke()
    {
        return view('welcome');
    }
}
