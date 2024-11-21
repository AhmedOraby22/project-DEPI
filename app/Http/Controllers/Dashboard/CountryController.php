<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Country\CreateRequest;
use App\Http\Requests\Dashboard\Country\EditRequest;
use App\Models\Country;
use Illuminate\Http\Request;

/**
 * controller country about web function
 */
class CountryController extends Controller
{
    /**
     * param Request $request
     * get all country to manage it
     */
    public function index(Request $request)
    {
        $datas = Country::all();
        return view('dashboard.country.index', ['datas' => $datas]);
    }

    public function create()
    {
        return view('dashboard.country.create');
    }

    public function store(CreateRequest $request)
    {
        $data = new Country();
        $data = $data->create($request->all());
        if($data)
        {
            return redirect(route('dashboard.country.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.country.create'))->with('message_false','problem');
    }

    public function edit($id)
    {
        $data = Country::find($id);
        return view('dashboard.country.edit', compact('data'));
    }
    public function update(EditRequest $request, $id)
    {
        $data = Country::find($id);
        $data = $data->update($request->all());
        if($data)
        {
            return redirect(route('dashboard.country.index', $id))->with("message", 'Done');
        }
        return redirect(route('dashboard.country.edit', $id))->with('message_false','problem');
    }

    public function destroy($id)
    {
        $data = Country::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('dashboard.country.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.country.index'))->with('message_false','problem');
    }
}
