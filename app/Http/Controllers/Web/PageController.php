<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    // Method to handle the About Us page
    public function about()
    {
        return view('about');
    }
}
