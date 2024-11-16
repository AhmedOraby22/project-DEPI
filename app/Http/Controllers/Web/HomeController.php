<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 2)->get();
        $departments = Department::where('status', 1)->get();
        return view('web.home',get_defined_vars()); // Ensure 'home' corresponds to 'resources/views/home.blade.php'
    }
}
