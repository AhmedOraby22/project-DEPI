<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\User\CreateRequest;
use App\Http\Requests\Dashboard\User\EditRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * controller user about web function
 */
class UserController extends Controller
{
    /**
     * param Request $request
     * get all user to manage it
     */
    public function index()
    {
        $datas = User::all();
        return view('dashboard.user.index', ['datas' => $datas]);
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(CreateRequest $request)
    {
        $data = new User();
        if (isset($request->password)) {
            $request->merge(['password' => Hash::make($request->password)]);
        }
        $data = $data->create($request->all());
        if($data)
        {
            return redirect(route('dashboard.user.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.user.create'))->with('message_false','problem');
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('dashboard.user.edit', compact('data'));
    }
    public function update(EditRequest $request, $id)
    {
        $data = User::find($id);
        $data = $data->update($request->all());
        if($data)
        {
            return redirect(route('dashboard.user.index', $id))->with("message", 'Done');
        }
        return redirect(route('dashboard.user.edit', $id))->with('message_false','problem');
    }

    public function show($id)
    {
        $data = User::find($id);
        return view('dashboard.user.show', compact('data'));
    }

    public function destroy ($id)
    {
        $data = User::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('dashboard.user.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.user.index'))->with('message_false','problem');
    }
}
