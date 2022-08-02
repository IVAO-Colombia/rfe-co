<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airlines = Airline::orderBy('name', 'asc')->paginate(15);
        return view('layouts.admin.pages.airlines.index', compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.pages.airlines.create');
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
            'icao' => 'required|max:3',
            'iata' => 'max:3',
            'name' => 'required|max:30',
            'logo' => 'max:50'
        ]);
        Airline::create($request->except(['_token', '_method']));
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
        $airline = Airline::find($id);
        return view('layouts.admin.pages.airlines.show', compact('airlines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $airline = Airline::find($id);
        return view('layouts.admin.pages.airlines.edit', compact('airlines'));
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
        $request->except(['_token', '_method']);
        $request->validate([
            'icao' => 'required|max:3',
            'iata' => 'max:3',
            'name' => 'required|max:30',
            'logo' => 'max:50'
        ]);
        Airline::where('id', $id)->update($request->except(['_token', '_method']));
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
        Airline::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Delete Successfuly');
    }
}
