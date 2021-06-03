<?php

namespace App\Http\Controllers;
use App\Models\Location;

use Illuminate\Http\Request;


class addLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $locations = Location::orderBy('id')->get();
        //dd( $trips );
        return view('admin.addlocation')->with('locations', $locations);
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Location $location)
    {
//dd($request);

        $location = new Location([
            'city'=>$request->city,
            'station'=>$request->station,
         ]);

         $location->save();
//dd($location);


            return redirect()->route('admin.admin.addlocation')->withSuccess('location added');
       //dd($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return view('locations.show')->with('location', $location);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //dd( $request );
        //dd( $location );
        $location = Location::find($request->id);
        //dd( $location );
        return view('locations.edit')->with('location', $location);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)


    {
        $location = Location::find($request->id );
        //dd($location);
        $location ->city=$request->city;
        $location ->station= $request->station;
        $location->update();
        return redirect()->route('admin.admin.addlocation')->withSuccess('location updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $location = Location::find($request->id);
        $location->delete();
        return redirect()->route('admin.admin.addlocation')->withSuccess('location DELETED');
    }
}
