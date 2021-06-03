@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity : Trips</title>
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @yield('styles')
</head>
<body>
  @php
//dd($trips);
@endphp
<nav>
    <div class="logo">
        <a href="{{url("/")}}"><img src="{{url("/images/logo2.png")}}" alt=""></a>
    </div>
</nav>
<div class="container">
    <div class="row my-5">
         <div class="col-md-8 mx-auto ">
            <div class="card ">
                 <div class="card-body" >
                    @foreach ($trips as $trip)
                    <form action="{{route('tickets.store',$trip->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field() }}
                        <input type="hidden" name="id" >
                        <input  type="hidden" name="trip_id" value="{{ $trip->id}}" >
                        <input  type="hidden" name="price" value="{{ $trip->price }}">
                        @endforeach
                     @if (Auth::check())
                             <div class="form-group">
                             <label for="">Departure_city</label>
                             <input type="text" name="Departure_city"
                                 id="Departure_city" class="form-control" value="{{ $trip->Departure_city }}" readonly>
                             </div>
                             <div class="form-group">
                             <label for="">Arrival_city</label>
                             <input type="text" name="Arrival_city"
                                 id="Arrival_city" class="form-control" value="{{ $trip->Arrival_city }}" readonly>
                             </div>
                             <div class="form-group">
                             <label for="">Departure_station</label>
                             <input type="text" name="Departure_station"
                                 id="Departure_station" class="form-control" value="{{ $trip->Departure_station}}" readonly>
                             </div>
                             <div class="form-group">
                             <label for="">Arrival_station</label>
                             <input type="text" name="Arrival_station"
                                 id="Arrival_station" class="form-control" value="{{ $trip->Arrival_station }}" readonly>
                             </div>
                             <div class="form-group">
                                 <label for="">date*</label>
                                 <input type="text" name="date"
                                     id="date" class="form-control" value="{{ $trip->Departure_Date }}" readonly>
                             </div>
                         @else
                         <div class="form-group">
                             <label for="name">name</label>
                             <input type="text" name="name"
                                 id="name" class="form-control">
                         </div>
                         <div class="form-group">
                             <label for="">email*</label>
                             <input type="text" name="email"
                             id="email" class="form-control">
                         </div>
                         <div class="form-group">
                             <label for="">Departure_city</label>
                             <input type="text" name="Departure_city"
                                 id="Departure_city" class="form-control" value="{{ $trip->Departure_city }}" readonly>
                             </div>
                             <div class="form-group">
                             <label for="">Arrival_city</label>
                             <input type="text" name="Arrival_city"
                                 id="Arrival_city" class="form-control" value="{{ $trip->Arrival_city }}" readonly>
                             </div>
                             <div class="form-group">
                             <label for="">Departure_station</label>
                             <input type="text" name="Departure_station"
                                 id="Departure_station" class="form-control" value="{{ $trip->Departure_station}}" readonly>
                             </div>
                             <div class="form-group">
                             <label for="">Arrival_station</label>
                             <input type="text" name="Arrival_station"
                                 id="Arrival_station" class="form-control" value="{{ $trip->Arrival_station }}" readonly>
                             </div>
                             <div class="form-group">
                                 <label for="">date*</label>
                                 <input type="text" name="date"
                                     id="date" class="form-control" value="{{ $trip->Departure_Date }}" readonly>
                             </div>
                         @endif
                   <div class="modal-footer">

                     <a href="{{url}}"><button  className="btn"  type="submit" class="btn btn-primary">confirme</button></a>
                     <a className="btn" href="{{url("/trip")}}" class="btn btn-danger">Cancel</a>
                    </div>
                 </form>
                 </div>
            </div>

         </div>
    </div>
    <style>
        body{
            background-color: rgb(34,34,34);
            }
        nav{
             display: flex;
             height: 10vh;
             width: 100%;
             background: rgb(34,34,34);
             align-items: center;
             justify-content: space-between;
             padding: 0 50px 0 100px;
             flex-wrap: wrap;
            }
            nav .logo{
              color: #fff;
              font-size: 35px;
              font-weight: 600;
              z-index: 1;
            }
            nav ul{
             display: flex;
             flex-wrap: wrap;
             list-style: none;
            }
            nav ul li{
             margin: 0 5px;
            }
            nav ul li a{
             color: #f2f2f2;
             text-decoration: none;
             font-size: 18px;
             font-weight: 500;
             padding: 8px 15px;
             border-radius: 5px;
             letter-spacing: 1px;
             transition: all 0.3s ease;
            }
            nav ul li a.active,
            nav ul li a:hover{
              color: rgb(255,183,0);
            }
            .box{
              background: rgb(34,34,34);
              box-shadow: 10px 15px 20px rgba(0, 0, 0, 0.3);
           }
           .table th{
               color: white;
           }
           .table td{
               color: white;
           }
           nav{
        display: flex;
        height: 10vh;
        width: 100%;
        background: rgb(34,34,34);
        align-items: center;
        justify-content: space-between;
        padding: 0 50px 0 100px;
        flex-wrap: wrap;
        margin-bottom: 5%;
    }
    nav .logo{
        color: rgb(255,183,0);
        font-size: 35px;
        font-weight: 600;
        z-index: 1;
    }
    nav .logo img{
        max-width: 120px;
        display: flex;
    }
    nav ul{
        display: flex;
        flex-wrap: wrap;
        list-style: none;
    }
    nav ul li{
        margin: 0 5px;
    }
    nav ul li a{
        color: white;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        padding: 8px 15px;
        border-radius: 5px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }
    nav ul li a.active,
    nav ul li a:hover{
        color: rgb(255,183,0);
    }
    nav .menu-btn i{
        color: #fff;
        font-size: 22px;
        cursor: pointer;
        display: none;
        }
        input[type="checkbox"]{
        display: none;
    }
    .dropdown-content{
            display: none;
            position: absolute;
            background-color: rgb(34,34,34);
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            min-width: 160px;
            padding: 12px 16px;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    @media (max-width: 1000px){
        nav{
            padding: 0 40px 0 50px;
        }
        .empty{
            height: 25vh;
        }
    }

    @media (max-width: 920px) {
        nav{
            position: fixed;
        }
        nav .menu-btn i{
            display: block;
        }
        .empty{
        height: 10rem;
        background: rgb(34,34,34);
        }
        .fuck{
            display: none;
        }
        nav .dropdown-content{
            display: contents;

    }
    @media (max-width: 480px){
        .main-header h3{
            font-weight: 400;
        }
        .main-header h1{
            font-weight: 500;
        }
        .rm{
            float: none;
        }
        .main-header .button{
            margin-right: 0%;
        }
        .remember{
            text-align: center;
            align-items: center;
            display: -webkit-inline-box;
        }
        .main-header input[type=checkbox]{
            margin-top: 4%;
        }
        footer{
            margin-top: 20%;
        }
        nav .logo{
            font-size: 1.5rem;
        }
    }
    #click:checked ~ .menu-btn i:before{
    content: "\f00d";
    }
    nav ul{
    position: fixed;
    padding-top: 5%;
    top: 10vh;
    left: -100%;
    background: #111;
    height: 100%;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
    opacity: 0.9;
    }
    #click:checked ~ ul{
    left: 0;
    }
    nav ul li{
    width: 100%;
    margin: 40px 0;
    }
    nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }
    #click:checked ~ ul li a{
    margin-left: 0px;
    }
    nav ul li a.active,
    nav ul li a:hover{
    background: none;
    color: rgb(255,183,0);
    }
    }
    .card{
            background-color: rgb(42, 41, 41);
            box-shadow: 10px 15px 20px rgba(0, 0, 0, 0.3);
        }
    .card label{
           color: white;
        }
       </style>
       <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }
        .usr{
            text-decoration: none;
            color: white;
            display: flex;
        }
        .usr:hover{
            color: rgb(255,183,0);
        }
        .dropdown-content{
            display: none;
            position: absolute;
            background-color: rgb(34,34,34);
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
        }
        .dropdown:hover .dropdown-content {
            display: block;
            flex-direction: column;
            color: rgb(255,183,0);
        }
        *{
            scroll-behavior: smooth
        }

        /* width */
        ::-webkit-scrollbar {
        width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #555;
        }

        nav{
            background: rgb(34,34,34);
            display: flex;
            height: 10vh;
            width: 100%;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px 0 100px;
            flex-wrap: wrap;
        }
        nav .logo{
            color: rgb(255,183,0);
            font-size: 35px;
            font-weight: 600;
            z-index: 1;
        }
        nav .logo img{
            max-width: 120px;
            display: flex !important;
        }
        nav ul{
            display: flex;
            flex-wrap: wrap;
            list-style: none;
        }
        nav ul li{
            margin: 0 5px;
        }
        nav ul li a{
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        nav ul li a.active,
        nav ul li a:hover{
            color: rgb(255,183,0);
        }

        nav .menu-btn i{
            color: #fff;
            font-size: 22px;
            cursor: pointer;
            display: none;
        }
        input[type="checkbox"]{
            display: none;
        }
        @media (max-width: 1000px){
        nav{
            padding: 0 40px 0 50px;
        }
        }
        @media (max-width: 920px) {
            .dropdown:hover .dropdown-content{
                display: contents;
            }
            .dissapear{
                display: none;
            }
            .usr{
                display: contents;
            }
            .empty{
            height: 10vh;
            }
            .fa-bars:before {
                content: "\f0c9";
            }
            nav{
                position: fixed;
            }
            .fuck{
                display: none;
            }

            nav .dropdown-content{
                display: contents;
            }
            nav .menu-btn i{
                display: block;
            }
            .dropdown{
                display: flex;
            }
            .col p{
                font-size: 80%;
                padding-left: 2%;
                padding-right: 2%;
            }

        #click:checked ~ .menu-btn i:before{
            content: "\f00d";
            z-index: 2;
        }
        nav ul,a.loreg{
            position: fixed;
            padding-top: 5%;
            top: 10vh;
            left: -100%;
            background: #111;
            height: 90vh;
            width: 100vw;
            text-align: center;
            display: block;
            transition: all 0.3s ease;
            opacity: 0.9;
        }
        #click:checked ~ ul{
            left: 0;
        }
        nav ul li{
            width: 100%;
            margin: 20px 0;
        }
        nav ul li a, .usr{
            width: 100%;
            margin-left: -100%;
            display: block;
            font-size: 20px;
            transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        #click:checked ~ ul li a{
            margin-left: 0px;
        }
        nav ul li a.active,
        nav ul li a:hover{
            background: none;
            color: rgb(255,183,0);
        }

        #test{
            height: 90vh ;
            width: 100% ;
            z-index: 1;

        }

        .content{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90vh;
            width: 100%;
            background-image: url("images/motion-blur.jpg") !important;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
        }
        .content div{
            display: inline;
        }

        .content h3{
            color: white;
            text-align: center;
            font-size: 40px;
            font-weight: 400;
            letter-spacing: 5px;
            margin-top: 3%;
        }
        @media screen and (max-width: 481px){
            nav .logo{
                font-size: 1.5rem;
            }
        }
    }

    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
    </html>
