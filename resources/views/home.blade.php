<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Velocity : Home</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <!-- Styles -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
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
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <li><a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();"><i class="fas fa-power-off"></i></a></li>
                        </form>
                        @else
                        <div class="dropdown">
                            <li class="fausr"><a href="#"><i class="fas fa-user"></i></a></li>
                            <div class="dropdown-content">
                            <li><a class="login" href="{{ route('login') }}">Log in</a></li>
                            <div class="sign-in">
                                <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></a></li>
                            </div>
                            <li><a class="register" href="{{ route('register') }}" >Register</a></li>
                            <div class="reg">
                                <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i></a></li>
                            </div>
                        </div>
                    </div>
                        @endif

                <li><a href="{{url("/trip")}}"><i class="fas fa-ticket-alt"></i></a></li>
            </ul>
        </nav>
                </div>
                <div class="content">
                    <div>
                        <video autoplay muted loop id="myVideo">
                            <source src="images/train.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                          </video>
                        <div class="h1">
                            <h1> {{ __('Welcome To Velocity') }} </h1>
                        </div>
                        <div class="slogan">
                            <h3>In Touch With Tomorrow.</h3>
                        </div>
                        <div class="button">
                            <a href="#middle">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="middle" id="middle">
                        <div class="welcome">
                            <h1> {{ __('Velocity ') }} </h1>
                            <p style="font-size: 2rem"> {{ __('Your Satisfaction Is Our Priority') }}</p>

                        </div>

                    <div class="section group">
                        <div class="col span_1_of_3">
                            <i class="fa fa-clock"></i>
                            <h3>Timeless</h3>
                            <p>We simplify the travel planning process so that your time can be saved.</p>
                        </div>
                        <div class="col span_1_of_3">
                            <i class="fa fa-comments"></i>
                            <h3>Active Support</h3>
                            <p>24/7 Customer Service support, travel advice and ticket management.</p>
                        </div>
                        <div class="col span_1_of_3">
                            <i class="fa fa-virus"></i>
                            <h3>Covid travel updates</h3>
                            <p>Find out what testing and quarantine rules apply for your journey.</p>
                        </div>
                    </div>
                </div>
                <div class="lower-body">
                    <h2>Learn more about us .</h2>
                    <h4 style="font-size: 1.5rem">Discover more information about Velocity.</h4>
                    <hr>

                    <div class="grid-container">
                        <div class="part-1">
                            <div class="image">
                                <img src="images/5.jpg" alt="">
                            </div>
                            <h2>Comfortable transport</h2>
                            <hr>
                            <h4>Having a pleasent ride in our trains is a <br> number one priority .</h4>
                            <div class="button">
                                <a href="{{url("/about")}}">Learn More</a>
                            </div>
                        </div>
                        <div class="part-1">
                            <div class="image">
                                <img src="images/6.jpg" alt="">
                            </div>
                            <h2>Our commitments</h2>
                            <hr>
                            <h4>We pride ourselves in our diversity, ethics, transparency, climate and solidarity .</h4>
                            <div class="button">
                                <a href="{{url("/about")}}">Learn More</a>
                            </div>
                        </div>
                        <div class="part-1">
                            <div class="image">
                                <img src="images/7.jpg" alt="">
                            </div>
                            <h2>Our passenger offers</h2>
                            <hr>
                            <h4>Trains, passenger services, cards & fares, <br> and sustainable mobility .</h4>
                            <div class="button">
                                <a href="{{url("/about")}}">Learn More</a>
                            </div>
                        </div>
                        <div class="part-1">
                            <div class="image">
                                <img src="images/8.jpg" alt="">
                            </div>
                            <h2>Booking</h2>
                            <hr>
                            <h4>Your door-to-door itinerary, timetables, booking, and real-time traffic updates.</h4>
                            <div class="button">
                                <a href="{{url("/about")}}">Learn More</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="footer-left">
                        <img src="images/logo2.png" alt="">
                        <p>Velocity is a train provider in Morocco that offers well-equipped coaches, luxurious seats, competitive pricing, and free WI-FI .</p>
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
<style>
    .login , .register{
        display: block;
    }
    .sign-in , .reg{
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
    .light-mode {
        background-color: rgb(216, 216, 216);
        color: rgb(34,34,34);
        transition: 0.3s linear;
    }
    .light-mode .section i , .light-mode hr{
        border-color: rgb(34,34,34)
    }
    .light-mode .footer-left p , .light-mode .footer h2{
        color: white;
    }
    .light-mode .middle , .light-mode .lower-body{
        background-color: rgb(216, 216, 216);
        transition: 0.3s linear;
    }
    hr{
        background: lightgray;
        width: 80%;
        height: 2px;
        display: block;
        right: 50%;
        margin: auto;
        margin-top: 3%;
        margin-bottom: 3%;
        height: 3px;
    }

    .lower-body{
        text-align: center;
        align-items: center;
        justify-content: center;
        background: rgb(34,34,34);
    }

    .lower-body h2{
        margin-bottom: 3%;
        padding-top: 3%;
    }

    .grid-container .image{
        height: 60%;
        margin-bottom: 5%;
    }
    .grid-container .image img{
        width: 90%;
        height: 100% !important;

    }

    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1Fr;
        grid-column-gap: 1%;
        height: 80%;
        margin-left: 3%;
        margin-right: 3%;
    }

    .part-1{
        width: 100%;
        height:85% !important;
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

    .section i{
        font-size: 4rem;
        padding: 5% 5% 5% 5%;
        border-radius: 50%;
        border-style: solid;
        border-color: white;
        border-width: 0.3rem;
    }
    .button a{
        color: white;
        padding: 0.5rem 1.5rem;
        font-size: 1.2rem;
        background: rgb(255,183,0);
        border: none;
        width: 50%;
        border-radius: 50px;
        cursor: pointer;
        transition: 0.5s;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: auto;
        display: block;
        margin-top: 5%;
        text-decoration: none;
        transition: 0.3s
    }
    .button a:hover{
        transform: scale(1.1);
    }

/*  SECTIONS  */
    .section {
        clear: both;
        padding: 0px;
        margin: 0px;
        text-align: center;
        padding-bottom: 2%;
        padding-top: 2%;
        padding-bottom: 5%;
        margin-left: 2%;
        margin-right: 2%;
    }
        /*  COLUMN SETUP  */
    .col {
        display: block;
        float:left;
        margin: 1% 0 1% 1.6%;
        padding-bottom: 2%;
    }

    .col h3{
        margin-bottom: 5%;
        margin-top: 5%;
    }
    .col:first-child { margin-left: 0; }

    /*  GROUPING  */
    .group:before,
    .group:after { content:""; display:table; }
    .group:after { clear:both;}
    .group { zoom:1; /* For IE 6/7 */ }


    /*  GRID OF THREE  */
    .span_3_of_3 { width: 100%; }
    .span_2_of_3 { width: 66.13%; }
    .span_1_of_3 { width: 32.26%; }



    /*  GO FULL WIDTH BELOW 480 PIXELS */
    @media only screen and (max-width: 480px) {
        .col {  margin: 1% 0 1% 0%; }
        .span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 100%; }
    }

    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    .content h1{
    color: rgb(255,183,0);
    text-align: center;
    font-weight: 500;
    letter-spacing: 5px;
    font-size: 50px;
    align-items: center;
    justify-content: center;
    }

    body{
        background: rgb(34,34,34);
        color: white;
        transition: 0.3s linear !important;
        overflow-x: hidden;
    }
    .welcome h1{
        text-align: center;
        font-weight: 600;
        letter-spacing: 3px;
        font-size: 40px;
        align-items: center;
        justify-content: center;
        margin-bottom: 2%;
        padding-top: 3%;
    }
    .middle{
        background: rgb(34,34,34);
    }
    .welcome p{
        text-align: center;
        font-weight: 400;
        letter-spacing: 3px;
        font-size: 15px;
        align-items: center;
        justify-content: center;
        margin-bottom: 3%;
    }
    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: -1;
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
    /*footer*/

    footer{
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        flex-flow: row wrap;
        padding: 50px;
        padding-bottom: 1%;
        background: rgb(34,34,34);
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
        .login , .register{
            display: none;
        }
        .sign-in , .reg{
            display: block;
            transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
    nav .dropdown-content {
        position: inherit;
        display: block;
        background: #111;
    }
    nav{
        position: fixed;
    }
    .fausr{
        display: none;
    }
    nav .dropdown-content{
        display: contents;
        padding: 0;
    }
    nav .menu-btn i{
        display: block;
    }
    .col p{
        font-size: 80%;
        padding-left: 2%;
        padding-right: 2%;
    }

    @media (max-width: 512px){
        .content h1{
        letter-spacing: 2px;
        font-weight: 600;
        font-size: 40px;
        }
        .content h3{
        letter-spacing: 3px !important;
        font-weight: 500 !important;
        font-size: 25px !important;
        }
        .button a{
        width: 50%;
        }
        .section i{
            font-size: 3rem;
            padding: 3%;
        }
        .col h3{
            font-weight: 400;
        }
    }

    #click:checked ~ .menu-btn i:before{
        content: "\f00d";
        z-index: 2;
    }
    nav ul,a.loreg{
        position: fixed;
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

    @media screen and (max-width: 1025px){
        .grid-container{
            margin-left: 1%;
            margin-right: 1%;
        }

        .grid-container .image img{
            height: 90%;
        }

        .grid-container .image{
            height: 60%;
            margin-top: 2%;
        }

        .lower-body h2{
            padding-top: 1px;
        }
    }
    @media screen and (max-width: 768px){
        .grid-container{
            margin-left: 1%;
            margin-right: 1%;
            padding-bottom: 5%;
        }

        .grid-container .image img{
            height: 100%;
            width: 100%;
        }

        .grid-container .image{
            margin-top: 1%;
            margin-bottom: 1%;
        }

        .lower-body{
            height: 100%;
        }

        .lower-body h2{
            padding-top: 1px;
            font-size: 20px;
            font-weight: 300;
        }

        .lower-body h4{
            font-size: 15px;
            font-weight: 400;
            margin-left: 1%;
            margin-right: 1%;
        }
    }

    @media screen and (max-width: 481px){
        .grid-container{
            display: block;
            margin-left: 1%;
            margin-right: 1%;
        }

        .grid-container .image img{
            height: 90%;
        }

        .grid-container .image{
            height: 60%;
            margin-top: 2%;
        }

        .lower-body h2{
            padding-top: 0.5%;
        }

        .lower-body h4{
            margin-bottom: 3%;
        }
        nav .logo{
            font-size: 1.5rem;
        }
    }

</style>
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
</body>
<!-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">

                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        -->

</html>
