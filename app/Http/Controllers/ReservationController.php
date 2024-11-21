<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $request->validate([
            'patient_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'branch' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'reservation_date' => 'required|date',
        ]);
    
        
        \App\Models\Reservation::create($request->all());
    
        
        return back()->with('success', 'Successfully send !');
    }
    

}
