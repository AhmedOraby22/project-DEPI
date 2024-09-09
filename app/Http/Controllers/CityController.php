<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\city;
use App\Http\Requests\StorecityRequest;
use App\Http\Requests\UpdatecityRequest;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web.form.city');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request,city $city)
    {
        $city=new city();
        $city->name=$request->name;
        $city->status=$request->status;
        
        $city->save();
        return redirect()->back()->with('status','City added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(city $city)
    {
        $city=city::all();
        return view('web.form.cityshow',['cites'=>$city]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(city $city,$id)
    {
        $city =city::find($id);
        return view('web.form.cityedit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, city $city,$id)
    {
        $city =city::find($id);
        $city->name=$request->input('name');
        $city->status=$request->input('status');
        $city->update();
        return redirect('/show_city')->with('status',"Data Updated Successfully");
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(city $city,$id)
    {
        $city=city::find($id);
        $city->delete();
        return redirect('/show_city')->with('status',"Data Deleted Successfully");
    }
}
