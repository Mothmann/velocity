<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity : About</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
            <li><a class="active" href="{{url("/about")}}"><i class="fas fa-address-card" style="color: rgb(255,183,0)"></i></a></li>
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
    <div class="empty"></div>

    <div class="title">
        <h1>About Us</h1>
        <hr>
        <h2>The Brains, Brauns, And Devs Behind Velocity</h2>
    </div>
    <div class="train">
        <img id="trainImg" src="images/train.png" alt="">
    </div>
    <div class="paragraph">
        <p>Velocity is a preferred Train provider in Morocco. Travel, with great-value fares that offers great-value, high-comfort trips.</p>
    </div>
    <div class="paragraph">
        <p>Velocity is the perfect choice for convenient, excellent-value intercity travel in well-equipped coaches across Morocco. Relax in luxurious, reclinable seats. Pricing is more than competitive: it is about the best value on the market. There is no skimping on facilities. There are tables for computers and other mobile electronics, plus electrical charging points.</p>
    </div>
    <div class="paragraph">
        <p>Every Velocity service has free Wi-Fi. There are restrooms on every Velocity compartments. What is more, travelers can book their preferred seat when they buy their tickets online.</p>
    </div>
    <div class="lower-body">
        <h2>Learn more about us</h2>
        <h4>Discover more information about Velocity</h4>
        <hr>
<div class="fl">
    <div class="grid-container">
        <div id="row1">
            <div id="image1">
                <img src="images/5.jpg" alt="">
                <div id="paragraph1">
                    <h2>Comfortable transport</h2>
                    <p>Having a pleasent ride in our trains is a number one priority, therfore, our fares are well equipped with luxurious and confortable seats .</p>
                </div>
            </div>
        </div>
        <hr>
        <div id="row2">
            <div id="image2">
                <div id="paragraph2">
                    <h2>Our commitments</h2>
                    <p>We pride ourselves in our diversity, ethics, transparency, climate and solidarity, that's why we respect everyone's health and make sure that our environment is Covid-Free .</p>
                </div>
                <img src="images/6.jpg" alt="">
            </div>
        </div>
        <hr>
        <div id="row1">
            <div id="image1">
                <img src="images/7.jpg" alt="">
                <div id="paragraph1">
                <h2>Our passenger offers</h2>
                <p>Our passenger's satisfaction is our responsibility, in Velocity, we offer safe and comfortable trains, a top notch passenger service, clean, safe, and well equipped fares, as well as sustainable mobility.</p>
            </div>
        </div>
        </div>
        <hr>
        <div id="row2">
            <div id="image2">
                <div id="paragraph2">
                    <h2>Booking</h2>
                    <p>We offer both a web and mobile solution to facilitate booking, as well as your ordinary door-to-door itinerary services, and multiple kiosks to buy your tickets on the spot.</p>
                </div>
                <img src="images/8.jpg" alt="">
            </div>
        </div>
    </div>

    </div>
</div>
<hr>
<div class="map">
    <img src="images/map.png" alt="">
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

</html>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    color: white;
    }
    .login , .register{
        display: block;
    }
    .sign-in , .reg{
        display: none;
    }
    li.fuck:hover{
        color: rgb(255,183,0);
        transition: 0.3s ease-in-out;
    }
    #trainImg{
        width: 75%;
        padding: 2% 0 2% 0;
        display: block;
        margin: auto;

    }
    #image1{
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        margin-left: 5%;
        margin-right: 5%;
    }
    #image2{
        display: flex;
        margin-left: 5%;
        margin-right: 5%;
        align-items: center;
    }
    .fl{
        margin-bottom: 2%;
    }
    .grid-container p{
        text-align: center;
    }
    .grid-container #row1 #image1 img{
        width: 40% !important;
        margin-right: 3%;
    }
    .grid-container #row2 #image2 img{
        width: 40% !important;
        margin-left: 3%;
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
    .light-mode .title h2{
        color: rgb(34,34,34);
    }
    .light-mode .paragraph p{
        color: rgb(34,34,34);
    }
    .light-mode .lower-body{
        background-color: rgb(216, 216, 216);
        transition: 0.3s linear;
    }

    .light-mode .lower-body p ,.light-mode .lower-body h4{
        color: rgb(34, 34, 34)
    }

    .light-mode .lower-body h2{
        color:rgb(250 172 33);
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

    body{
        background-color: rgb(34,34,34);
        color: white;
        transition: 0.3s linear;
    }
    hr{
        width: 70%;
        margin: auto;
        margin-top: 2%;
        margin-bottom: 2%;
    }
    .map img{
        width: 80%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
    }
    h1{
        text-align: center;
        align-items: center;
        justify-content: center;
        margin: auto;
        font-size: 3.5rem;
        color: rgb(255,183,0);
        font-weight: 500;
        letter-spacing: 3px;
        margin-top: 3%;
        margin-bottom: 3%;

    }
    .title h2{
        text-align: center;
        align-items: center;
        justify-content: center;
        margin: auto;
        font-size: 2rem;
        font-weight: 300;
        letter-spacing: 2px;
    }
    .paragraph{
        margin-bottom: 3%;
        align-items: center;
        justify-content: center;
        width: 80%;
        margin: auto;
    }
    .paragraph p{
        margin-top: 3%;
        margin-bottom: 3%;
        font-size: 1.2rem;
        letter-spacing: 3px;
    }

    #row1 {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        margin-bottom: 3%;
        width: 100%;
        min-height: 200px;
        overflow: auto;

    }
    #row2{
        width: 100%;
        min-height: 200px;
        overflow: auto;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;
    }
    .lower-body h2 , .lower-body h4{
        display: flex;
        align-items: center;
        justify-content: center;

    }
@media screen and (max-width: 700px){

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

    #paragraph1{
        float: left;
        width: 50%;
        padding-right: 60px;
    }
    #image2 img , #image1 img{
        float: none;
        width: 50%;
        margin-top: 4%;
        margin-left: 0% !important;
    }
    #paragraph2{
        float: right;
        width: 50%;
        padding-left: 60px;
    }
    #row1 {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        margin-bottom: 3%;
        width: 100%;
        min-height: 200px;
        overflow: auto;
        overflow-x: hidden;
    }
    #row2{
        width: 100%;
        min-height: 200px;
        overflow: auto;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        overflow-x: hidden;
    }
    .grid-container #row2 #image2 img{
        margin-right: 0%;
    }
    .grid-container #row1 #image1 img{
        margin-left: 0%;
    }
    .lower-body hr{
        display: none;
    }
    .grid-container #row1 #image1 img{
        width: 55%;
        margin-right: 0;
    }
    .grid-container #row2 #image2 img{
        width: 55%;
        margin-right: 0;
    }
    #paragraph1 , #paragraph2{
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 5%;
    }
    #image1{
        flex-direction: column;
        width: 130%;
    }
    #image2{
        flex-direction: column-reverse;
        width: 130%;

    }
}
    nav{
        margin-bottom: 5%;
        display: flex;
        height: 10vh;
        width: 100%;
        background: rgb(34,34,34);
        align-items: center;
        justify-content: space-between;
        padding: 0 50px 0 100px;
        flex-wrap: wrap;
        z-index: 3;
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
        width: 100%;
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
    .dropdown:hover .dropdown-content {
        display: block;
    }
    nav ul li a i.active,
    nav ul li a i:hover{
        color: rgb(255,183,0);
    }
    .dropdown-content {
    display: none;
    position: absolute;
    background-color: rgb(34,34,34);
    box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
    min-width: 160px;
    padding: 12px 16px;
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
    @media (max-width: 480px){
        nav .logo{
            font-size: 1.5rem;
        }
    }
    @media (max-width: 920px) {
        .fuck{
            display: none;
        }
        nav .dropdown-content{
            display: contents;
        }
        .empty{
            height: 10vh;
        }
        nav{
            position: fixed;
        }
        nav .menu-btn i{
            display: block;
        }
        #click:checked ~ .menu-btn i:before{
        content: "\f00d";
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
        nav ul{
            position: fixed;
            padding-top: 5%;
            top: 10vh;
            left: -100%;
            background: rgb(34,34,34);
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
/*footer*/

footer{

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
        margin-right: 10%;
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

    @media screen and (max-width: 481px){
        nav .logo{
            font-size: 1.5rem;
        }
    }
</style>
