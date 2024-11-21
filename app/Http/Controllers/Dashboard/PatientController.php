<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Patient;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Patient\EditRequest;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * controller patient about web function
 */
class PatientController extends Controller
{
    /**
     * param Request $request
     * get all patient to manage it
     */
    public function index(Request $request)
    {
        $patients = Patient::all();  
        return view('dashboard.patient.index', compact('patients')); 
    }

    public function edit($id)
    {
        $patients = Patient::find($id);  
        return view('dashboard.patient.edit', compact('patients'));
    }
    public function update(EditRequest $request, $id)
    {
        $patients = Patient::find($id); 
        if ($patients) {
            $patients->update($request->all());  
            return redirect(route('dashboard.patient.index'))->with('message', 'Patient updated successfully.');
        }
        return redirect(route('dashboard.patient.edit', $id))->with('message_false', 'Patient not found.');
    }

    public function show($id)
    {
        $patients = Patient::find($id); 
        return view('dashboard.patient.profile', compact('patients'));
    }

    public function destroy($id)
    {
        $patients = Patient::find($id);  // ابحث عن المريض باستخدام الـ id
        if ($patients) {
            $patients->delete();  // احذف المريض من قاعدة البيانات
            return redirect(route('dashboard.patient.index'))->with('message', 'Patient deleted successfully.');
        }
        return redirect(route('dashboard.patient.index'))->with('message_false', 'Patient not found.');
    }
    
}
