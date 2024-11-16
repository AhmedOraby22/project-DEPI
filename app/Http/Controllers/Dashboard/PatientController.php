<?php

namespace App\Http\Controllers\Dashboard;

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
        $datas = User::where('role',3)->get();
        return view('dashboard.patient.index', ['datas' => $datas]);
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('dashboard.patient.edit', compact('data'));
    }
    public function update(EditRequest $request, $id)
    {
        $data = User::find($id);
        $data = $data->update($request->all());
        if($data)
        {
            return redirect(route('dashboard.patient.index', $id))->with("message", 'Done');
        }
        return redirect(route('dashboard.patient.edit', $id))->with('message_false','problem');
    }

    public function show($id)
    {
        $data = User::find($id);
        return view('dashboard.patient.profile', compact('data'));
    }

    public function destroy($id)
    {
        $data = User::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('dashboard.patient.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.patient.index'))->with('message_false','problem');
    }
}
