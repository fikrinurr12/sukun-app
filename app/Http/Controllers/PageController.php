<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('index');
    }

    public function signup() {
        return view('signup');
    }
}
