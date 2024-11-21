<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class SearchController extends Controller
{ public function index(){
    $doctors = User::where('role', 2)->get();
    // $doctors = Doctor::all();  // Fetch all doctors from the database
    return view('web.search', compact('doctors'));  // Return the view with doctors data
}
public function show(request $request)
{    // Sanitize and normalize the search term
    $name = Str::lower(trim($request->input('search')));
    
    // Fetch all matching doctors from the database
    $doctors = User::where('name', 'LIKE', "%{$name}%")->get();

    // Check if any doctor was found
    if ($doctors->isNotEmpty()) {
        return view('web.search', compact('doctors'));
    } else {
        // No doctors found, pass an empty array and a status message
        $doctors = [];
        $status = 'Doctor name was not found';
        return view('web.search', compact('doctors', 'status'));
    }}}