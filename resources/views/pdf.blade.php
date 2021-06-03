<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewthort" content="width=device-width, initial-scale=1">
    <meta httth-equiv="x-ua-comthatible" content="ie=edge">

    <title>velocity</title>

</head>
<body>
    <div>
        <h2 class="title">VELOCITY</h2>
    </div>
    <div class="row ">
        <div class="col">
            <div class="row1">
                <div class="col1">
                    @foreach ($tickets as $ticket)
                    <div style="text-align:center;">
                        <h2 class="divider-style-2"><span>Ticket #{{$ticket->id}}</span></h2>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row2">
                <div class="col2">
                    <div class="table">
                        <head>
                            <div style="text-align:center;">
                                <h2 class="divider-style"><span>Train details</span></h2>
                            </div>
                        </head>
                        <div>
                            @foreach ($tickets as $ticket)
                            <h4 style="text-align:center;" class="TNM" >Trip :{{$ticket->trip_id}}</h4>
                            <h4 style="text-align:center;" class="DOJ">Date of journey : {{$ticket->date}}</h4>
                            <h4 style="text-align:center;" class="From">FROM :{{$ticket->Departure_city}}</h4>
                            <h4 style="text-align:center;" class="To"> To :{{$ticket->Arrival_city}}</h4>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row2">
                <div class="col2">
                    <div class="table">
                        <div style="text-align:center;">
                            <h2 class="divider-style"><span>Passanger Details</span></h2>
                        </div>
                        </head>
                        <div>
                            @foreach ($tickets as $ticket)
                            <h4 style="text-align:center;" class="TNM" >name :{{$ticket->name}}</h4>
                            <h4 style="text-align:center;" class="DOJ">email: {{$ticket->email}}</h4>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row2">
                <div class="col2">
                    <div class="table">
                        <head>
                            <div style="text-align:center;">
                                <h2  class="divider-style"><span>Amount</span></h2>
                            </div>
                        </head>
                        <div>
                            @foreach ($tickets as $ticket)
                            <h4 style="text-align:center;" class="TNM" >prix :{{$ticket->price}} dh</h4>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4>Ynov</h4>
            </div>
        </div>
    </div>
    <style>
@page { size: 700pt 700pt; }
.title{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}
.divider-style {
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
  color: rgb(255,183,0);
  position: relative;
  margin-right: 40px;
  margin-left: 40px;
  border-bottom:rgb(66, 65, 60) 1px solid ;
}
.divider-style-2 {
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
  color: rgb(255,183,0);
  position: relative;
  margin-right: 40px;
  margin-left: 40px;
}
.divider-style span {
  background: #fff;
  position: relative;
  z-index: 5;
}
h4{
    color: rgb(56, 55, 55);
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
}
.divider-style:before {
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
  content: "";
  display: block;
  width: 100%;
  height: 1px;
  position: absolute;
  z-index: 1;
}
    </style>
</body>
</html>
