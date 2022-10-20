<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function show()
    {
        $nums = "20";
        return view('list', compact('nums'));
    }
}
