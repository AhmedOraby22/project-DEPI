<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home'); // Ensure 'home' corresponds to 'resources/views/home.blade.php'
    }
}
