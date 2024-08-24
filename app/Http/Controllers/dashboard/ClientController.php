<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * controller user about web function
 */
class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * param Request $request
     * get all user to manage it
     */
    public function index()
    {
        $perPage = $request->perPage ?? 10;
        $clients = User::where('is_admin',0)->paginate($perPage);
        return view('dashboard.client.index', ['users' => $clients]);
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('dashboard.client.edit', compact('data'));
    }
    public function update(EditRequest $request, $id)
    {
        $user = User::find($id);
        $data = $user->update($request->all());
        if($data)
        {
            return redirect(route('client.edit', $id))->with("message", 'Done');
        }
        return redirect(route('client.edit', $id))->with('problem');
    }

    public function delete($id)
    {
        $data = User::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('client.index'))->with("message", 'Done');
        }
        return redirect(route('client.index'))->with('problem');
    }
}
