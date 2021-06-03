<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Velocity : Tickets</title>
        <!-- Styles -->
    <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            }
            body{
                background-color: rgb(34,34,34);
                color: white;
                transition: 0.3s linear;
                overflow-x: hidden;
            }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="{{url("/")}}"><img src="{{url("/images/logo2.png")}}" alt=""></a>
            </div>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="{{url("/about")}}"><i class="fas fa-address-card"></i></a></li>
            <li><a href="{{url("/contact")}}"><i class="fas fa-file-signature"></i></a></li>
                    @if (Auth::check())
                        <li><a href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt"></i></a></li>
                        <li><a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                            <i class="fas fa-user-alt"></i></a></li>
                        <li><a class="active" href="{{ url('/ticket') }}"><i class="fas fa-clipboard-list"></i></a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <li><a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                this.closest('form').submit();"><i class="fas fa-power-off"></i></a></li>
                    </form>
                    @else
                    <div class="dropdown">
                        <li class="fuck"><a href="#"><i class="fas fa-user"></i></a></li>
                        <div class="dropdown-content">
                        <li><a href="{{ route('login') }}">Log in</a></li>
                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                    </div>
                </div>
                    @endif

            <li><a href="{{url("/trip")}}"><i class="fas fa-ticket-alt"></i></a></li>
        </ul>
    </nav>

    <div class="row-2 ">
        <div class="col-2">
            <div class="box">
               <h3 class="box-title">
                  My Tickets
               </h3>
               <div class="tickets">
                    @foreach ($tickets as $ticket)
                       <div class="infos">
                           <div class="info-center">
                               <h2 class="text-info">
                                  <a herf="{{ route ('tickets.show',$ticket->id) }}" class="link">
                                    {{$ticket->Departure_city}} ---> {{$ticket->Arrival_city}}
                                  </a>
                               </h2>
                               <div class=info2>
                                   <h3>{{$ticket->Departure_station}} ---> {{$ticket->Arrival_station}}</h3>
                                    <h2>{{$ticket->date}}</h2>

                               </div>
                               <div>
                               <h1 class="info">
                                   <span class="price">{{$ticket->price}} dh</span>
                                   <span class="ticket-id">#N {{$ticket->id}}</span>
                                </div>
                           </div>

                       </div>
                    @endforeach

               </div>
           </div>
       </div>
    </div>

    <footer class="footer">
        <div class="footer-left">
            <img src="images/logo2.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada leo mauris, non ultricies nunc</p>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-tumblr"></i></a>
            </div>
        </div>
        <ul class="footer-right">
            <li>
                <h2>Product</h2>

                <ul class="box">
                    <li><a href="#">Theme Design</a></li>
                    <li><a href="#">Plugin Design</a></li>
                    <li><a href="#">Wordpress</a></li>
                    <li><a href="#">Joomla Template</a></li>
                    <li><a href="#">HTML Template</a></li>
                </ul>
            </li>
            <li class="features">
                <h2>Useful Links</h2>

                <ul class="box">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Tickets</a></li>
                    <li><a href="#">Customer Service</a></li>
                </ul>
            </li>
            <li>
                <h2>Address</h2>

                <ul class="box">
                    <li><a href="#">8 ibnou khatima</a></li>
                    <li><a href="#">Rue Les Hopitaux</a></li>
                    <li><a href="#">Casablanca</a></li>
                    <li><a href="#">Maroc</a></li>
                </ul>
            </li>
        </ul>

        <div class="footer-bottom">
            <p>All Rights Reserved By &copy;Velocity 2021</p>
            <img class="footer-dark-mode" src="images/sun.png" id="icon">
        </div>
    </footer>
</body>

<script>
    var icon = document.getElementById("icon");

    let localData = localStorage.getItem("theme");

    if(localData == "light"){
        icon.src = "images/moon.png";
        document.body.classList.remove("light-mode");
    }
    else if(localData == "dark"){
        icon.src = "images/sun.png";
              document.body.classList.remove("light-mode");
    }

     localStorage.setItem("theme" , "light");

     icon.onclick = function() {
         document.body.classList.toggle("light-mode");
         if(document.body.classList.contains("light-mode")){
             icon.src = "images/moon.png"
             localStorage.setItem("theme" , "light");
         }
         else{
             icon.src = "images/sun.png"
             localStorage.setItem("theme" , "dark");
         }
     }
 </script>
</html>
<style>
.container {
    margin: 200px;
    box-shadow: 10px 15px 20px rgba(0, 0, 0, 0.3);
    display: grid;
    grid-template-columns: 40% 60%;
    background: rgb(34,34,34);
}
.container-time {
    background-color: rgb(23, 23, 23);
    padding: 50px;
    outline: 3px dashed rgb(255,183,0);
    outline-offset: -30px;
    text-align: center;
}
.heading {
    font-size: 35px;
    text-transform: uppercase;
}

.heading-days {
    color:rgb(255,183,0);
    font-size: 30px;

}

.heading-phone {
    font-size: 20px;
}
.container-form {
    padding: 20px 0;
    margin: 0 auto;
    color: white;
}
.container-form h2{
    color: rgb(255,183,0)
}
form {
    display: grid;
    grid-row-gap: 20px;
}
form p {
    font-weight: 600;
}
.form-field {
    display: flex;
    justify-content: space-between;
}

input,select {
    padding: 10px 15px;
    border: 2px solid rgb(255,183,0);
    border-bottom: 5px solid rgb(255,183,0)
}
.btn {
    background-color: rgb(255,183,0);
    color: #fff;
    padding: 10px 20px;
    border: none;
    font-size: 18px;
    border-radius: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -ms-border-radius: 100px;
    -o-border-radius: 100px;
    box-shadow: 7px 10px 12px rgba(0, 0, 0, .1);
    cursor: pointer;
    transition: all .3s;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    -ms-transition: all .3s;
    -o-transition: all .3s;
}

.btn:hover {
    transform: scale(1.03);
    -webkit-transform: scale(1.03);
    -moz-transform: scale(1.03);
    -ms-transform: scale(1.03);
    -o-transform: scale(1.03);
    box-shadow: 10px 12px 15px rgba(0, 0, 0, .3);
}

@media(max-width: 970px){
    .container{
        display: block;
    }
}
@media(max-width: 658px){
    .container-form h2{
        font-size: 20px;
        text-align: center;
    }
    form p{
        display: none;
    }
    input, select{
        width: -webkit-fill-available;
    }
    .heading{
        font-size: 30px;
    }
    .heading-days{
        font-size: 19px;
    }
    p{
        font-size: 13px;
    }
    .heading-phone{
        font-size: 12px;
    }
    hr{
        margin-top: 3%;
        margin-bottom: 3%;
    }
}
@media(max-width: 610px){
    input, select{
        width: 90%;
        margin: auto;;
    }
    .container{
        width: 90%;
        margin: auto;
    }
    form p{
        display: block;
    }
    input,select{
        width: 60%;
        margin: inherit;
    }
}
        /*navigation css with resonsive*/
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
    .empty{
        height: 25vh;
    }
}

@media (max-width: 920px) {
    .fuck{
        display: none;
    }
    nav .dropdown-content{
        display: contents;
    }
    nav .menu-btn i{
        display: block;
    }
    .empty{
    height: 10rem;
    background: rgb(34,34,34);
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
margin: 15px 0;
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
.light-mode hr{
    background: rgb(34,34,34);
}
.light-mode .heading, .light-mode h4, .light-mode p{
    color: white;
}
.light-mode #ylw{
    color: rgb(255,183,0);
}
/****************************************/
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
    margin-top: 1%;
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
.footer-dark-mode {
        width: 30px;
        cursor: pointer;
        margin-top: 2%;
    }
.box a {
    color: #999;
}
.box-title{
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgb(255,183,0);
    font-size: 3rem;
}
.footer-bottom{
    text-align: center;
    color: #999;
    padding-top: 50px;
}

.footer-left p{
    padding-right: 20%;
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
       .tickets{
        width: 100%;
        color: rgb(255,183,0);
        border-radius: 20px;
        margin-top: 10px;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
        }
        .row-1{
          width:1000px;
          margin-top: 30px;
          margin-left:40px
        }
       .row-2{
          margin: 20px;
          display: contents;
        }

        .col-2 {
           flex-direction: row;
           flex-wrap: nowrap;
           justify-content: center;
           align-content: center;
           align-items: center;
         }
       .infos{
          width: 70%;
          margin-bottom: 10px;
          justify-content: space-between;
          box-shadow: 10px 15px 20px rgba(0, 0, 0, 0.061);
          border-radius: 20px;
          border: rgb(42, 41, 41) 1px solid;
          background-color: rgb(44, 43, 41);
          margin-top:50px
        }
       .info{
          display:flex;
          justify-content: space-around;
          margin: 15px;
        }
        .info2 {
            margin-top: 10%;
            margin-top: 10%;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
        }
        h2.text-info {
            margin-top: 5%;
            display: flex;
            flex-direction: row;
            align-content: center;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        h2 {
           margin-left: 20px;
        }
@media screen and (max-width: 415px){
    h2.text-info {
        margin-top: 5%;
        display: flex;
        flex-direction: row;
        align-content: center;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: inherit;
    }
    .info2{
        font-size: small;
    }
}
</style>

