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
    @yield('styles')
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

    <nav>
        <div class="logo">Velocity</div>
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a href="{{url("/")}}">Home</a></li>
          <li><a href="{{url("/trip")}}" class="active">Trips</a></li>
          <li><a  href="{{url("/about")}}">About</a></li>
          <li><a href="#">Contact</a></li>
          @if (Route::has('login'))
            @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
          @else
              <li><a href="{{ route('login') }}">Log In</a></li>
              @if (Route::has('register'))
                  <li><a  href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
              @endif
          @endauth
            <!--<li><a href="#"><i class="fas fa-user"></i></a></li>-->
            @endif
        </ul>
    </nav>
    <div class="container">
         <div class="row">
              <div class="col-md-9 mx-auto my-9">
                   @include('includes.messages')
              </div>
         </div>

      @yield('content')
    </div>
    <div class="row-2 ">
        <div class="col-2">
            <div class="box">
               <h3 class="box-title">
                   {{$date->date}}
               </h3>
               <div class="trips">
                       <div class="infos">
                               <p class="info">
                                   <span class="station">{{$ticket->id}}</span>
                                   <span class="price">{{$ticket->price}} dh</span>
                               </p>
                               <p>
                                  <a href="tickets" class="button">buy ticket</a>
                               </p>
                       </div>
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
        .card-body{
          width:500px;
          background: rgb(34,34,34);
          color: rgb(255,183,0);
        }
        .button{
          background-color:rgb(255,183,0);
          color:white;
          padding: 15px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
        }

        .button:hover, button:active {
           color:white;
           background-color:rgb(255,149,0) ;
        }
       .trips{
          width:1000px;
          background: rgb(34,34,34);
          color: rgb(255,183,0);
        }
        .row-1{
          width:1000px;
          margin-top: 30px;
          margin-left:40px
        }
       .row-2{
          width:1000px;
          margin: 20px;
        }
       .box{
          width:1000px;
          background: rgb(34,34,34);
          box-shadow: 10px 15px 20px rgba(0, 0, 0, 0.3);

       }
       .box-title{
          color: white;
       }
       .btn{
          color: rgb(255,183,0) ;
        }

        p{
          color: rgb(255,183,0) ;
        }
       .infos{
          width: 100%;
          margin-bottom: 10px;
          justify-content: space-between;
          box-shadow: 10px 15px 20px rgba(0, 0, 0, 0.3);
          border:solid 1px black;
        }
       .info{
          display:flex;
          justify-content: space-between;
        }

     </style>
     
</body>
</html>
