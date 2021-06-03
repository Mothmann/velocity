<?php

namespace App\Http\Controllers;
use App\Models\Train;

use Illuminate\Http\Request;


class addTrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $trains = Train::orderBy('id')->get();
        //dd( $trips );
        return view('admin.addtrain')->with('trains', $trains);
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('trains.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Train $train)
    {
//dd($request);

        $train = new Train([
            'type'=>$request->type,
            'Max_capacity'=>$request->Max_capacity,
            'Driver'=>$request->Driver,
         ]);

         $train->save();
//dd($train);


            return redirect()->route('admin.admin.addtrain')->withSuccess('train added');
       //dd($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Train $train
     * @return \Illuminate\Http\Response
     */
    public function show(Train $train)
    {
        return view('trains.show')->with('train', $train);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Train $train
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //dd( $request );
        //dd( $train );
        $train = Train::find($request->id);
        //dd( $train );
        return view('trains.edit')->with('train', $train);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Train $train
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Train $train)


    {
        $train = Train::find($request->id );
        //dd($train);
        $train ->type=$request->type;
        $train ->Max_capacity= $request->Max_capacity;
        $train ->Driver=$request->Driver;
        $train->update();
        return redirect()->route('admin.admin.addtrain')->withSuccess('train updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Train $train
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $train = Train::find($request->id);
        $train->delete();
        return redirect()->route('admin.admin.addtrain')->withSuccess('train DELETED');
    }
}
