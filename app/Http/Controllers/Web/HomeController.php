<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Department;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 2)->get();
        $departments = Department::where('status', 1)->get();
        $blogs = Blog::where('status', 1)->get();
        return view('web.home',get_defined_vars()); // Ensure 'home' corresponds to 'resources/views/home.blade.php'
    }

    public function about()
    {
        return view('web.about',get_defined_vars()); // Ensure 'home' corresponds to 'resources/views/home.blade.php'

    }
}
