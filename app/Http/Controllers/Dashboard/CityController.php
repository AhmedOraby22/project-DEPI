<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\City\CreateRequest;
use App\Http\Requests\Dashboard\City\EditRequest;
use App\Models\City;
use App\Models\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * controller city about web function
 */
class CityController extends Controller
{
    /**
     * param Request $request
     * get all city to manage it
     */
    public function index(Request $request)
    {
        $datas = City::all();
        return view('dashboard.city.index', ['datas' => $datas]);
    }

    public function create()
    {
        $countries = country::where('status',1)->get();
        return view('dashboard.city.create', ['countries' => $countries]);
    }

    public function store(CreateRequest $request)
    {
        $data = new City();
        $data = $data->create($request->all());
        if($data)
        {
            return redirect(route('dashboard.city.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.city.create'))->with('message_false','problem');
    }

    public function edit($id)
    {
        $data = City::find($id);
        $countries = country::where('status',1)->get();
        return view('dashboard.city.edit', compact('data','countries'));
    }
    public function update(EditRequest $request, $id)
    {
        $data = City::find($id);
        $data = $data->update($request->all());
        if($data)
        {
            return redirect(route('dashboard.city.index', $id))->with("message", 'Done');
        }
        return redirect(route('dashboard.city.edit', $id))->with('message_false','problem');
    }

    public function destroy($id)
    {
        $data = City::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('dashboard.city.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.city.index'))->with('message_false','problem');
    }
}
