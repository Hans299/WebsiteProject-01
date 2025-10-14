<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testingController extends Controller
{
    public function testing(){
        return view('content.content_create');
    }
}
