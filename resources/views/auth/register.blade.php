<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity : register</title>
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
                        <li class="fausr"><a href="#"><i class="fas fa-user" style="color: rgb(255,183,0)"></i></a></li>
                        <div class="dropdown-content">
                        <li><a class="login" href="{{ route('login') }}">Log in</a></li>
                        <div class="sign-in">
                            <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></a></li>
                        </div>
                        <li><a class="register" href="{{ route('register') }}" style="color: rgb(255,183,0)">Register</a></li>
                        <div class="reg">
                            <li><a href="{{ route('register') }}"><i class="fas fa-user-plus" style="color: rgb(255,183,0)"></i></a></li>
                        </div>
                    </div>
                </div>
                    @endif

            <li><a href="{{url("/trip")}}"><i class="fas fa-ticket-alt"></i></a></li>
        </ul>
    </nav>
    <div class="title">Registration</div>
    <div class="body">
        <div class="container">
            <x-guest-layout>
                <x-jet-authentication-card>
                    <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                    </x-slot>
                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="user-details">
                            <div class="input-box">
                                <x-jet-label for="name" class="details" value="{{ __('Name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="input-box">
                                <x-jet-label for="email" class="details" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>

                            <div class="input-box">
                                <x-jet-label for="password" class="details" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="input-box">
                                <x-jet-label for="password_confirmation" class="details" value="{{ __('Confirm Password') }}" />
                                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                            {{-- <div class="input-box">
                                <x-jet-label for="role_id" value="{{ __('Register as:') }}" />
                                <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                    <option value="1">client</option>
                                    <option value="2">admin</option>
                                </select>
                            </div> --}}
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="input-box">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif

                        <div class="user-details">
                            <a class="ar" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-jet-button class="user-details">
                                {{ __('Register') }}
                            </x-jet-button>
                        </div>
                    </form>
                </x-jet-authentication-card>
            </x-guest-layout>
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
.light-mode .section i{
    border-color: rgb(34,34,34)
}
.light-mode .footer-left p{
    color: white;
}
.light-mode .footer h2{
    color: white;
}
.light-mode .ar, .light-mode .ar:hover{
    color: rgb(34,34,34);
}
.light-mode button.user-details{
    color: rgb(34,34,34);
}
    .body{
        display: flex;
        height: 50vh;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }
    .container{
        max-width: 700px;
        width: 100%;
        padding: 25px 30px;
    }
    .title{
        font-size: 3rem;
        font-weight: 600;
        margin: auto;
        text-align: center;
    }
    .title::before{
        content: '';
        position: absolute;
        height: 3px;
        width: 30px;
        background: rgb(255,183,0);
    }
    .container .user-details{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
        margin: auto;
    }
    .user-details .input-box{
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
    }
    .user-details .input-box input{
        height: 45px;
        width: 100%;
        outline: none;
        border-radius: 5px;
        border: 2px solid rgb(255,183,0);
        padding-left: 15px;
        font-size: 16px;
        border-bottom-width: 6px;
    }
    .ar{
        color: white;
        text-decoration: none;
        transition: 0.3S;
        margin-top: auto;
    }
    .ar:hover{
        color: rgb(255,183,0);
        transform: scale(1.1);
    }
    .user-details button{
        height: 100%;
        outline: none;
        border: none;
        background: rgb(255, 183, 0);
        color: white;font-size: 20px;
        font-weight: 500;
        letter-spacing: 1px;
        border-radius: 5px;
        transition: all 0.2s ease-in-out;
        align-items: center;
        justify-content: center;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
}
.user-details button:hover{
    cursor: pointer;
    transform: scale(1.1);
}
    .user-details .input-box .details{
        font-weight: 500;
        margin-bottom: 5px;
    }
    @media(max-width: 584px){
    .container{
    max-width: 100%;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
    }
    .body{
        height: 60vh;
    }
    .title{
        padding-top: 25%
    }
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
    .title{
        padding-top: 15%;
    }
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
</style>
</body>
</html>
