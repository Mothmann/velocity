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
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a href="{{url("/about")}}"><i class="fas fa-address-card"></i></a></li>
        <li><a href="{{url("/contact")}}"><i class="fas fa-file-signature"></i></a></li>
        <li><a href="{{ url('/dashboard') }}" id="x1"><i class="fas fa-tachometer-alt"></i></a></li>
            <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <i class="fas fa-power-off"></i></a></li>
            </form>
            <li><a id="x2" href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                <i class="fas fa-user-alt"></i></a></li>

        <li><a href="{{url("/trip")}}"><i class="fas fa-ticket-alt"></i></a></li>
        <div>
            @if (auth()->user()->role_id == 2)
            <div class="dropdown">
                <li class="dissapear"><x-jet-nav-link href="" :active="request()->routeIs('admin')">
                    <i class="fas fa-users-cog" style="color: rgb(255, 183, 0)"></i>
                </x-jet-nav-link></li></a>
                <div class="dropdown-content">
                <li><a class="active" href="{{ url('/admin/trip') }}"><i class="fas fa-suitcase"></i></a></li>
                <li><a href="{{ url('/admin/train') }}"><i class="fas fa-train"></i></a></li>
                <li><a href="{{ url('/admin/location') }}"><i class="fas fa-location-arrow"></i></a></li>
            </div>
            @endif
        </div>
    </ul>
</nav>
    <div class="row-1 my-4">
        <div class="col-1-md-12">
            <div class="form-group">
                <a href="{{route('admin.trips.create')}}"class="btn btn-primary">create a trips</i></a>
            </div>
            <div class="box">
               <div class="card-body">
                      <table class="table">
                            <thead>
                                <tr>
                                   <th>id</th>
                                   <th>Departure_city</th>
                                   <th>Arrival_city</th>
                                   <th>Departure_station</th>
                                   <th>Arrival_station</th>
                                   <th>price</th>
                                   <th>Arrival_Time</th>
                                   <th>Departure_Date</th>
                                   <th>dispo</th>
                                   <th>train_id</th>
                                   <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($trips as $trip)
                                <tr>
                                   <td>{{$trip->id}}</td>
                                   <td>{{$trip->Departure_city}}</td>
                                   <td>{{$trip->Arrival_city}}</td>
                                   <td>{{$trip->Departure_station}}</td>
                                   <td>{{$trip->Arrival_station}}</td>
                                   <td>{{$trip->price}}</td>
                                   <td>{{$trip->Arrival_Time}}</td>
                                   <td>{{$trip->Departure_Date}}</td>
                                   <td>{{$trip->dispo}}</td>
                                   <td>{{$trip->train_id}}</td>
                                   <td>
                                      <a href="{{route('admin.trips.edit', ['id' => $trip->id])}}"class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                      <a href="/admin/deletetrip?id={{ $trip->id }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                   </td>
                                </tr>
                              @endforeach
                            </tbody>
                       </table>
               </div>
            </div>
       </div>


    </div>



  <style>
    body{
        background-color: rgb(34,34,34);
        overflow-x: hidden;
    }
    .form-group{
        display: flex;
        justify-content: center;
        align-items: center;
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
/****************************************/
.header{
    height: 90vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    user-select: none;
}

.main-header{
    text-align: center;
}

.main-header h1{
    font-size: 3rem;
}

.main-header hr{
    width: 50%;
    margin: auto;
    padding:5px;
    background:rgb(255, 183, 0) ;
    border: none;
    border-radius: 50%;
    margin-bottom: 3%;
}

.main-header h3{
    font-size: 1.5rem;
    margin-bottom: 3%;
    margin-top: 3%;
}

.main-header input{
    width: 100%;
    padding: 1rem;
    margin: 20px 0px;
    border: none;
    border-bottom: 5px solid rgb(255, 183, 0);
}

.main-header input[type=checkbox]{
    width: fit-content !important;
    display: block;
    float: left;
    margin-right: 2%;
    margin-top: 1.5%;
    background: rgb(255, 183, 0) !important;
}
.main-header .button{
    padding: 0.5rem 2rem;
    font-size: 1.2rem;
    background: rgb(255, 183, 0);
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.5s;
    text-align: center;
    margin: auto;
    justify-content: center;
    align-items: center;
    margin-top: 5%;
    margin-bottom: 5%;
    margin-right: 6%;
    width: 70%;
}

.main-header .button:hover{
    transform: scale(1.1);
}

.fp{
    float: right;
    font-size: 15px;
    color: white;
    text-decoration: none;
    transition: 0.2s
}

.fp:hover{
    color: rgb(255, 183, 0)
}

.rm{
    float: left;
    font-size: 15px;
}
.wrap{
    max-width: 400px;
    margin: auto;
    margin-top: 3%;
    padding: 2%;
    border-radius: 10px;
}
.social-media button{
    padding: 10px;
    width: 70%;
    border: none;
    font-size: 0.9em;
    border-radius: 10px;
    margin-bottom: 5%;
    transition: 0.5s;
    padding: 0.5rem 2rem;
}
.social-media button:hover{
    transform: scale(1.1);
}
button a{
    text-decoration: none;
    color: white;
    cursor: pointer;
    float: ;
}

button:nth-child(1){
    background: #32508e;
}
button:nth-child(2){
    background: #dd4b39;
}


/*footer*/
footer{
display: -webkit-flex;
display: -moz-flex;
display: -ms-flex;
display: -o-flex;
display: flex;
flex-flow: row wrap;
padding: 50px;
color: white;
background-color: rgb(34, 34, 34);
margin-top: 5%;
}

.footer > *{
flex: 1 100%;
}
.footer-left{
margin-right: 1.25em;
margin-bottom: 2em;

}
.footer-left img{
width: 50%;
}

.footer h2{
font-weight: 600;
font-size: 17px;
}

.footer ul{
list-style: none;
padding-left: 0;
}

.footer li{
line-height: 2em;
margin-top: 2%;
}

.footer a{
text-decoration: none;
}
.footer-right{
display: -webkit-flex;
display: -moz-flex;
display: -ms-flex;
display: -o-flex;
display: flex;
flex-flow: row wrap;
}

.footer-right > * {
flex: 1 50%;
margin-right: 1.25en;
}

.box a {
color: #999;
}

.footer-bottom{
text-align: center;
color: #999;
padding-top: 50px;
}

.footer-left p{
padding-right: 20%;
}
.footer-dark-mode {
        width: 30px;
        cursor: pointer;
        margin-top: 2%;
    }
.socials a i{
    color: #e7f2f4;
    padding: 10px 12px;
    font-size: 20px;
}
@media screen and (min-width: 600px) {
.footer-right > * {
    flex: 1;
}
.footer-left{
    flex: 1 0px;
}
.footer-right{
    flex: 2 0px;
}
.col p{
    font-size: 1.5rem;
}
}
/******************************/
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
.light-mode {
    background-color: rgb(216, 216, 216);
    color: rgb(34,34,34);
    transition: 0.3s linear;
    }
.light-mode .section i{
    border-color: rgb(34,34,34)
}
.light-mode .footer-left p{
    color: white;
}
.light-mode .footer h2{
    color: white;
}
.light-mode h1{
    color: rgb(34,34,34);
}
.light-mode h3 ,.light-mode h4{
    color: rgb(34,34,34);
}
.light-mode .fp, .light-mode .rm{
    color: rgb(34,34,34);
}
   </style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

