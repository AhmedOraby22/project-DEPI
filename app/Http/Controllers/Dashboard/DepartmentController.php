<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Department\CreateRequest;
use App\Http\Requests\Dashboard\Department\EditRequest;
use App\Models\Department;
use Illuminate\Http\Request;

/**
 * controller department about web function
 */
class DepartmentController extends Controller
{
    /**
     * param Request $request
     * get all department to manage it
     */
    public function index(Request $request)
    {
        $datas = Department::all();
        return view('dashboard.department.index', ['datas' => $datas]);
    }

    public function create()
    {
        return view('dashboard.department.create');
    }

    public function store(CreateRequest $request)
    {
        $data = new Department();
        $avatarPath = null;
        if($request->hasFile('avatar'))
        {
            $avatarPath = time() . '.' . Request()->avatar->getClientOriginalExtension();
            Request()->avatar->move(public_path('avatars'), $avatarPath);
        }
        $request->merge(['avatar'=>$avatarPath]);
        $data = $data->create($request->all());
        if($data)
        {
            return redirect(route('dashboard.department.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.department.create'))->with('message_false','problem');
    }

    public function edit($id)
    {
        $data = Department::find($id);
        return view('dashboard.department.edit', compact('data'));
    }
    public function update(EditRequest $request, $id)
    {
        $data = Department::find($id);
        $avatarPath = null;
        if($request->hasFile('avatar'))
        {
            $avatarPath = time() . '.' . Request()->avatar->getClientOriginalExtension();
            Request()->avatar->move(public_path('avatars'), $avatarPath);
        }
        $request->merge(['avatar'=>$avatarPath]);
        $data = $data->update($request->all());
        if($data)
        {
            return redirect(route('dashboard.department.index', $id))->with("message", 'Done');
        }
        return redirect(route('dashboard.department.edit', $id))->with('message_false','problem');
    }

    public function destroy($id)
    {
        $data = Department::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('dashboard.department.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.department.index'))->with('message_false','problem');
    }
}
