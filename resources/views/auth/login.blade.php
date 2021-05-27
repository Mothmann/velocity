<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity : Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
    }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="images/logo2.png" alt="">
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="{{url("/")}}">Home</a></li>
            <li><a href="{{url("/about")}}">About</a></li>
            <li><a href="{{url("/contact")}}">Contact</a></li>
            <div class="dropdown">
                <li class="fuck"><a class="active" href="#"><i class="fas fa-user"></i></a></li>
                <div class="dropdown-content">
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                    @endif
                        <li><a class="active" href="{{ route('login') }}">Log in</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            </div>
            <li><a href="{{url("/tickets")}}">Tickets</a></li>
        </ul>
    </nav>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="empty"></div>
            <div class="header">
                <div class="main-header">
                    <h1>Login</h1>
                    <hr />
                    <h3>Please Enter Your Credentials</h3>
                    <div class="mt-4">
                        <h4>Email :</h4>
                        <x-jet-label for="email"/>
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <h4>Password :</h4>
                        <x-jet-label for="password"/>
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="remember">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="rm">{{ __('Remember me') }}</span>
                            </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="fp" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                        <x-jet-button class="button">
                            {{ __('Log in') }}
                        </x-jet-button>

                        <h3>Or Login With :</h3>
                        <div class="social-media">
                            <button><a class="social-fb" href="{{ route('auth.facebook') }}">Login With Facebook</a></button>
                            <button><a class="social-gl" href="{{ route('auth.google') }}">Login With Google</a></button>
                        </div>
                </div>
            </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
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
