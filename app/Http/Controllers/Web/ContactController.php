<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('web.home'); 
    }

    public function send(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'gender' => 'required|integer|in:0,1',
            'message' => 'required|string',
        ]);

        // Store the contact message in the database
        Contact::create($validatedData);

        // Redirect or show a success message
        return redirect()->route('home')->with('success', 'Your message has been sent successfully!');
    }
}