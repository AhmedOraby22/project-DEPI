<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 2)->get();
        return view('web.home',['doctors'=>$doctors]); // Ensure 'home' corresponds to 'resources/views/home.blade.php'
    }
}
