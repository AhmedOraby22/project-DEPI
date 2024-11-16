<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // Method to show the list of doctors
    public function index()
    {
        $doctors = Doctor::all();  // Fetch all doctors from the database
        return view('doctors', compact('doctors'));  // Return the view with doctors data
    }

    // Method to show the form for creating a new doctor
    public function create()
    {
        return view('createDoctor');  // Return the view to add a new doctor
    }

    // Method to store a new doctor
    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors,email',
            'phone' => 'required|string|max:15',
        ]);

        // Create and save the new doctor
        Doctor::create($validated);

        // Redirect to the doctors list page with a success message
        return redirect()->route('doctors.index')->with('success', 'Doctor added successfully!');
    }

    // Method to show the form for editing a doctor
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('editDoctor', compact('doctor'));
    }

    // Method to update a doctor's details
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->update($request->all());
        return redirect()->route('doctors.index');
    }

    // Method to delete a doctor
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->route('doctors.index');
    }
}
