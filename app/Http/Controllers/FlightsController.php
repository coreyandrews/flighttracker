<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Flights;

class FlightsController extends Controller
{
    // RENDER A LIST 
    //public function index($id)
    //{
    //    $flight = Flights::latest()->get()
    //    return view('flights.index', ['flight' => $flight]);
    //}
    
    // SHOW A SINGLE LIST
    public function show(Flights $flight)
    {
        return view('flights.show', ['flight' => $flight]);
    }

    // SHOW A VIEW TO CREATE A NEW RESOURCE
    public function create()
    {
        return view('flights.create');
    }

    // PERSIST THE NEW RESOURCE
    public function store()
    {

        Flights::create(request()->validate([
            'dep_icao' => 'required',
            'dep_date' => 'required',
            'dep_time' => 'required',
            'arr_icao' => 'required',
            'arr_date' => 'required',
            'arr_time' => 'required',
            'route' => 'required',
            'altitude' => 'required',
            'aircraft_typ' => 'required',
            'aircraft_reg' => 'required',
            'img_path' => 'required'
        ]));

        return redirect('/flightlog');
    }

    // SHOW A VIEW TO EDIT AN EXISTING RESOURCE
    public function edit(Flights $flight)
    {
        return view('flights.edit', compact('flight'));

    }

    // PERSIST THE EDITED RESOURCE
    public function update(Flights $flight)
    {
        $Flight->update(request()->validate([
            'dep_icao' => 'required',
            'dep_date' => 'required',
            'dep_time' => 'required',
            'arr_icao' => 'required',
            'arr_date' => 'required',
            'arr_time' => 'required',
            'route' => 'required',
            'altitude' => 'required',
            'aircraft_typ' => 'required',
            'aircraft_reg' => 'required',
            'img_path' => 'required'
        ]));

        return redirect('/flightlog/' . $flight->id);

    }

    // DELETE THE RESOURCE
    public function destroy(Flights $flight)
    {
        $flight->delete();
        return redirect('/flightlog');
    }


}
