<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index(string $type)
    {
        return view('front.login.' . $type . '.index');
    }
}
