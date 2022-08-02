<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::orderBy('id', 'asc');
        return view('layouts.admin.pages.flights.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.pages.flights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'flight' => 'required|max:10',
            'type' => 'required|max:10',
            'airline' => 'max:3',
            'departure' => 'required|max:4',
            'departure_gate' => 'max:10',
            'route' => '',
            'destination' => 'required|max:4',
            'destination_gate' => 'max:10',
            'aircraft' => 'max:4',
            'departure_time' => '',
            'arrival_time' => '',
            'information' => '',
            'user_id' => 'max:20'
        ]);
        Flight::create($request->except(['_token', '_method']));
        return redirect()->back()->with('success', 'Create Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flight = Flight::find($id);
        return view('layouts.admin.pages.flights.show', compact('flight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flight = Flight::find($id);
        return view('layouts.admin.pages.flights.edit', compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'flight' => 'required|max:10',
            'type' => 'required|max:10',
            'airline' => 'max:3',
            'departure' => 'required|max:4',
            'departure_gate' => 'max:10',
            'route' => '',
            'destination' => 'required|max:4',
            'destination_gate' => 'max:10',
            'aircraft' => 'max:4',
            'departure_time' => '',
            'arrival_time' => '',
            'information' => '',
            'user_id' => 'max:20'
        ]);
        Flight::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect()->back()->with('success', 'Update Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Flight::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Delete Successfuly');
    }
}
