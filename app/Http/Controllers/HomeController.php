<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Ensure 'home' corresponds to 'resources/views/home.blade.php'
    }
}
