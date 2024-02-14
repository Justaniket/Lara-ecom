<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class userlogin extends Controller
{
    public function create()
    {
        return view('login');
    }
}
