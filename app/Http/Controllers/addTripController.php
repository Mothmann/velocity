<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use App\Models\Train;
use App\Models\Location;

use Illuminate\Http\Request;

class addTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $trips = Trip::orderBy('id')->get();
        //dd( $trips );
        return view('admin.addtrip')->with('trips', $trips);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trains =Train::all();
        $locations=Location::all();
        return view('trips.create')->with('trains',$trains)
                                   ->with('locations',$locations)
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Trip $trip)
    {
//dd($request);
        $this->validate($request,[
            'Departure_city'=>'required',
             'Arrival_city'=>'required',
             'Departure_station'=>'required',
             'Arrival_station'=>'required',
             'price'=>'required',
             'Arrival_Time'=>'required',
             'Departure_Date'=>'required',
             'dispo'=>'required',
             'train_id'=>'required'
         ]);
$trip = new Trip([
            'Departure_city'=>$request->Departure_city,
            'Arrival_city'=>$request->Arrival_city,
            'Departure_station'=>$request->Departure_station,
            'Arrival_station'=>$request->Arrival_station,
            'price'=>$request->price,
            'Arrival_Time'=>$request->Arrival_Time,
            'Departure_Date'=>$request->Departure_Date,
            'dispo'=>$request->dispo,
            'train_id'=>$request->train_id,
         ]);

         $trip->save();
//dd($trip);


            return redirect()->route('admin.admin.addtrip')->withSuccess('trip added');
       //dd($request->all());

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
        //dd( $request );
        //dd( $trip );
        $trip = Trip::find($request->id);
        //dd( $trip );
        return view('trips.edit')->with('trip', $trip);
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
        $this->validate($request,[
            'Departure_city'=>'required',
             'Arrival_city'=>'required',
             'Departure_station'=>'required',
             'Arrival_station'=>'required',
             'price'=>'required',
             'Arrival_Time'=>'required',
             'Departure_Date'=>'required',
             'dispo'=>'required',
             'train_id'=>'required'
         ]);
        $trip = Trip::find($request->id );
        //dd($trip);
        $trip ->Departure_city=$request->Departure_city;
        $trip ->Arrival_city= $request->Arrival_city;
        $trip ->Departure_station=$request->Departure_station;
        $trip ->Arrival_station=$request->Arrival_station;
        $trip ->price=$request->price;
        $trip ->Arrival_Time=$request->Arrival_Time;
        $trip ->Departure_Date=$request->Departure_Date;
        $trip ->dispo=$request->dispo;
        $trip ->train_id=$request->train_id;
        $trip->update();
        return redirect()->route('admin.admin.addtrip')->withSuccess('trip updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $trip = Trip::find($request->id);
        $trip->delete();
        return redirect()->route('admin.admin.addtrip')->withSuccess('trip DELETED');
    }
}
