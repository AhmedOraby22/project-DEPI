<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Doctor\CreateRequest;
use App\Http\Requests\Dashboard\Doctor\EditRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Department;
use App\Models\User;
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
        $datas = User::where('role',2)->get();
        return view('dashboard.doctor.index', ['datas' => $datas]);
    }

    public function create()
    {
        $countries = Country::where('status',1)->get();
        $cities = City::where('status',1)->get();
        $Departments = Department::where('status',1)->get();
        return view('dashboard.doctor.create',get_defined_vars());
    }

    public function store(CreateRequest $request)
    {
        $data = new User();
        if (isset($request->password)) {
            $request->merge(['password' => Hash::make($request->password)]);
        }
        $avatarPath = null;
        if($request->hasFile('avatar'))
        {
            $avatarPath = time() . '.' . Request()->avatar->getClientOriginalExtension();
            Request()->avatar->move(public_path('avatars'), $avatarPath);
        }
        $request->merge(['role' => 2,'avatar'=>$avatarPath]);
        $data = $data->create($request->all());
        if($data)
        {
            return redirect(route('dashboard.doctor.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.doctor.create'))->with('message_false','problem');
    }

    public function edit($id)
    {
        $data = User::find($id);
        $countries = Country::where('status',1)->get();
        $cities = City::where('status',1)->get();
        $Departments = Department::where('status',1)->get();
        return view('dashboard.doctor.edit',get_defined_vars());
    }
    public function update(EditRequest $request, $id)
    {
        $data = User::find($id);
        $data = $data->update($request->all());
        if($data)
        {
            return redirect(route('dashboard.doctor.index', $id))->with("message", 'Done');
        }
        return redirect(route('dashboard.doctor.edit', $id))->with('message_false','problem');
    }

    public function show($id)
    {
        $data = User::find($id);
        return view('dashboard.doctor.profile', compact('data'));
    }

    public function destroy($id)
    {
        $data = User::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('dashboard.doctor.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.doctor.index'))->with('message_false','problem');
    }
}
