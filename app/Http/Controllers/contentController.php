<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentController extends Controller
{
    public function landing()
    {
        return view('content.content_landing');
    }
}
