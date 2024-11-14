<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\country;
use App\Http\Requests\StorecountryRequest;
use App\Http\Requests\UpdatecountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web.form.country');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request,country $country)
    {   $country=new country();
        $country->name=$request->name;
        $country->status=$request->status;
        $country->save();
        return redirect()->back()->with('status','Country added Successfully');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecountryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(country $country)
    {
        $country=country::all();
        return view('web.form.countryshow',['countries'=>$country]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(country $country,$id)
    {
        $country =country::find($id);
        return view('web.form.countryedit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, country $country,$id)
    {
        $country = country::find($id);
        $country->name = $request->input('name');
        $country->status = $request->input('status');
        $country->update();
        return redirect()->back()->with('status','Country Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(country $country,$id)
    {
        $country=country::find($id);
        $country->delete();
        return redirect()->back()->with('message','country deleted successfully!');
    }
}
