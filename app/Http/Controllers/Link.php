<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    public function helloWorld(){
        return view('blog');
    }
}
