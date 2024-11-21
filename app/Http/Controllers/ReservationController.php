<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Store a new reservation in the database.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'patient_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'branch' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'reservation_date' => 'required|date',
        ]);

        $reservation = new Reservation();
         $patient = new Patient();
         $patient->name = $request->patient_name;
     
         $patient->phone = $request->phone;
         $patient->branch = $request->branch;
         $patient->specialty = $request->specialty;
         $patient->reservation_date = $request->reservation_date;
         $patient->save();
        // Redirect back with a success message
        return back()->with('success', 'Successfully sent!');
    }
}
