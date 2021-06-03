<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\Trip;

use Illuminate\Http\Request;


class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->search !== null) {
            $trips = Trip::orderBy('id', 'DESC')
            ->where('Departure_city', 'like', $request->search)
            ->where('Arrival_city', 'like',$request->search2)
            ->where('Departure_station', 'like',$request->search3)
            ->where('Arrival_station', 'like',$request->search4)
            ->where('Departure_Date', '>=',$request->search5)
            ->get();


            //die, var_dump
            //dd( $trips );
            return view('trips.index')->with([
                'trips'=>$trips,
            ]);
        }else {
            return view('trips.index')->with([
                'trips'=>Trip::whereDispo(0)->get(),
                ]);
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Trip $trip)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trip $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        return view('trips.show')->with('trip', $trip);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trip $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trip $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)


    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

    }
}
