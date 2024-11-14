<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Doctor\CreateRequest;
use App\Http\Requests\Dashboard\Doctor\EditRequest;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * controller doctor about web function
 */
class DoctorController extends Controller
{
    /**
     * param Request $request
     * get all doctor to manage it
     */
    public function index(Request $request)
    {
        $datas = Doctor::all();
        return view('dashboard.doctor.index', ['datas' => $datas]);
    }

    public function create()
    {
        return view('dashboard.doctor.create');
    }

    public function store(CreateRequest $request)
    {
        $data = new Doctor();
        if (isset($request->password)) {
            $request->merge(['password' => Hash::make($request->password)]);
        }
        $data = $data->create($request->all());
        if($data)
        {
            return redirect(route('dashboard.doctor.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.doctor.create'))->with('message_false','problem');
    }

    public function edit($id)
    {
        $data = Doctor::find($id);
        return view('dashboard.doctor.edit', compact('data'));
    }
    public function update(EditRequest $request, $id)
    {
        $data = Doctor::find($id);
        $data = $data->update($request->all());
        if($data)
        {
            return redirect(route('dashboard.doctor.index', $id))->with("message", 'Done');
        }
        return redirect(route('dashboard.doctor.edit', $id))->with('message_false','problem');
    }

    public function show($id)
    {
        $data = Doctor::find($id);
        return view('dashboard.doctor.profile', compact('data'));
    }

    public function destroy($id)
    {
        $data = Doctor::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('dashboard.doctor.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.doctor.index'))->with('message_false','problem');
    }
}
