<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method to handle the About Us page
    public function about()
    {
        return view('about');
    }
}
