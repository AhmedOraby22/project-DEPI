<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * controller user about web function
 */
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * param Request $request
     * get all user to manage it
     */
    public function index(Request $request)
    {
        $perPage = $request->perPage ?? 10;
        $users = User::where('is_admin',1)->paginate($perPage);
        return view('dashboard.user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(CreateRequest $request)
    {
        $user = new User();
        if (isset($request->password)) {
            $request->merge(['password' => Hash::make($request->password)]);
        }
        $request->merge(['is_admin' => 1]);
        $data = $user->create($request->all());
        if($data)
        {
            return redirect(route('user.index'))->with('Done');
        }
        return redirect(route('user.create'))->with('problem');
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('dashboard.user.edit', compact('data'));
    }
    public function update(EditRequest $request, $id)
    {
        $user = User::find($id);
        $request->merge(['is_admin' => 1]);
        $data = $user->update($request->all());
        if($data)
        {
            return redirect(route('user.edit', $id))->with("message", 'Done');
        }
        return redirect(route('user.edit', $id))->with('problem');
    }

    public function profile($id)
    {
        $data = User::find($id);
        return view('dashboard.user.profile', compact('data'));
    }

    public function delete($id)
    {
        $data = User::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('user.index'))->with("message", 'Done');
        }
        return redirect(route('user.index'))->with('problem');
    }
}
