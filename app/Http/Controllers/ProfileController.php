<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        // Simulated user data, replace with real data from your database
        $user = (object) [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'total_sales' => 10234.50
        ];

        return view('profile', compact('user'));
    }
}
