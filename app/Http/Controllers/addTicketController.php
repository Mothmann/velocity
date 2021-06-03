<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use App\Models\Trip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PDF;
use Mail;

class addTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return view('tickets.index')->with([
            'tickets'=>Ticket::where('User_id', 'like', Auth::user()->id)->get()

            ]);
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trips =Trip::all();
        return view('tickets.create')->with('trips',$trips);

    }
    public function pdf(Request $request, Ticket $ticket)
    {
        $tickets = Ticket::where('id', Ticket::raw("(select max(id)from tickets)"))
            ->get();
        view()->share('tickets',$tickets);
        $pdf = PDF::loadView('pdf', $tickets);
            $tickets = ['tickets'=>$tickets];
            if (Auth::check()){
                $tickets["email"] = Auth::user()->email;
                Mail::send('pdf', $tickets, function($message)use($tickets, $pdf) {
                    $message->from('noreply@velocity.ma', 'velocity')
                        ->to($tickets["email"])
                        ->subject("tickets here!")
                        ->attachData($pdf->output(),"tickets.pdf");
                });}

            return $pdf->download('tickets.pdf');
            return view('pdf');



    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Ticket $ticket)
    {
        $this->validate($request,[
            'user_id'=>'nullable',
            'name'=>'nullable',
            'email'=>'nullable',
            'Departure_city'=>'required',
            'Arrival_city'=>'required',
            'Departure_station'=>'required',
            'Arrival_station'=>'required',
            'trip_id'=>'required',
            'price'=>'required',
            'date'=>'required',
        ]); //dd( $request );
        if (Auth::check()){
            //dd( $ticket);
            $ticket = new Ticket([
                'user_id'=>Auth::user()->id,
                'name'=>Auth::user()->name,
                'email'=>Auth::user()->email,
                'Arrival_city'=>$request->Arrival_city,
                'Departure_city'=>$request->Departure_city,
                'Arrival_city'=>$request->Arrival_city,
                'Departure_station'=>$request->Departure_station,
                'Arrival_station'=>$request->Arrival_station,
                'trip_id' => $request->trip_id,
                'price'  =>$request->price,
                'date'  => $request->date,
            ]);

           }else{
                $ticket = new Ticket([
                    'user_id'   => $request->user_id,
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'Departure_city'=>$request->Departure_city,
                    'Arrival_city'=>$request->Arrival_city,
                    'Departure_station'=>$request->Departure_station,
                    'Arrival_station'=>$request->Arrival_station,
                    'trip_id' => $request->trip_id,
                    'price'  =>$request->price,
                    'date'  => $request->date,]);
            }
            $ticket->save();

        return redirect()->action(
            [PaypalController::class, 'price']);
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show')->with('ticket', $ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //dd( $request );
        //dd( $ticket );
        $ticket = Ticket::find($request->id);
        //dd( $ticket );
        return view('tickets.edit')->with('ticket', $ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)


    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

    }
}
