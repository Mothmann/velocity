<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Sign Up.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Velocity : Sign Up</title>
</head>
<body>
    <nav>
        <div class="logo">Velocity</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a  href="#">Home</a></li>
          <li><a href="{{url("/about")}}" >About</a></li>
          <li><a href="#">Contact</a></li>
          @if (Route::has('login'))
            @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
          @else
              <li><a href="{{ route('login') }}">Log In</a></li>
              @if (Route::has('register'))
                  <li><a  href="{{ route('register') }}" class="active">Register</a></li>
              @endif
          @endauth
            <!--<li><a href="#"><i class="fas fa-user"></i></a></li>-->
            @endif
        </ul>
    </nav>
        <div class="title">Registration</div>
        <div class="container">

            <div class="body">
                <form action="#">
                    <div class="user-details">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-box">
                                <span class="details" for="name" value="{{ __('Full Name') }}">Full Name</span>
                                <input type="text" placeholder="Enter Your Name" required id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">

                            </div>

                            <div class="input-box">
                                <span class="details" for="email" value="{{ __('Email') }}">Email</span>
                                <input type="text" placeholder="Enter Your Email" required id="email" type="email" name="email" :value="old('email')" required>

                            </div>

                            <div class="input-box">
                                <span class="details" for="password" value="{{ __('Password') }}">Password</span>
                                <input type="password" placeholder="Enter Your Password" required id="password" type="password" name="password" required autocomplete="new-password">

                            </div>
                            <div class="input-box">
                                <span class="details" for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</span>
                                <input type="password" placeholder="Confirm Your Password" required id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="input-box">
                                <x-jet-label for="role_id" id="ra" value="{{ __('Register as :') }}" />
                                <select name="role_id" x-model="role_id" class="details" id="role">
                                    <option value="1">admin</option>
                                    <option value="2">client</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <a class="details" id="ar" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                        </div>
                    </div>

                    <div class="button">
                        <input type="submit" value={{ __('Register') }}>
                    </div>

                </form>
            </div>
            <footer class="footer">
                <div class="footer-left">
                    <img src="images/logo3.png" alt="">
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
                    <p>All Rights Reserved By &copy;Souk 2021</p>
                </div>

            </footer>
        </div>
</body>
</html>
<style>
#role{
    margin-top: 3%
}
#ar{
    color: white;
    text-decoration: none;
    border-bottom: none;
    transition: all 0.2s ease-in-out;
}
#ar:hover{
    color: rgb(255, 183, 0);
    transform: scale(1.1);
    text-decoration: underline rgb(255, 183, 0);
}
.body{
    display: flex;
    height: 70vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    margin-bottom: 10%;
    scroll-behavior: smooth;


}
.container{
    width: 100%;
    padding: 25px 30px;
}
.title{
    font-size: 50px;
    font-weight: 600;
    position: relative;
    text-align: center;
    color: white;
}
.container.title::before{
    left: 0;
    bottom: 0;
}
.title::before{
    content: "";
    position: absolute;
    height: 5px;
    width: 30px;
    background: rgb(255, 183, 0);
}
.container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
form .user-details .input-box{
    margin: 20px 0px 12px 0px;
    width: calc(100% / 2 - 20px);

}

.user-details .input-box input{
    height: 45px;
    width: 100%;
}
.user-details .input-box .details{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
    border: none;
    border-bottom: 5px solid rgb(255, 183, 0);
    padding-left: 15px;
    font-size: 16px;
    color: white;
}
form .button{
  height: 45px;
  margin:  45px 0px;
}
form .button input{
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  background: rgb(255, 183, 0);
  color: white;
  font-size: 20px;
  font-weight: 500;
  letter-spacing: 1px;
  border-radius: 5px;
  transition: all 0.5s ease-in-out;
}
form .button input:hover{
  cursor: pointer;
  transform: scale(1.1);

}
@media (max-width: 584px){
  .container{
    max-width: 100%;
}
  form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .gender-details .category{
    width: 100%;
  }
  .container form .user-details{
    max-height: 300px;
    overflow-y: scroll;
    margin-top: 15%;
  }
  .title{
    font-size: 20px;
    font-weight: 600;
    position: static;
    text-align: center;
    color: white;
  }
}
input{
    background: #e8fef0;
    color: black;
}
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    background: rgb(34,34,34);
    color: white;
    }
    body{
    overflow-x: hidden,
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
        color: #999;
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
    nav .menu-btn i{
    color: #fff;
    font-size: 22px;
    cursor: pointer;
    display: none;
    }
    input[type="checkbox"]{
    display: none;
    }
    @media (max-width: 920px) {

    .empty{
    height: 10vh;
    background: rgb(34,34,34);
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
    nav ul{
    position: fixed;
    padding-top: 5%;
    top: 0vh;
    left: -100%;
    background: rgb(34,34,34);
    height: 100vh;
    width: 25%;
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






<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>



<<<<<<< HEAD
=======
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-jet-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="1">client</option>
                    <option value="2">admin</option>
                </select>
            </div>
>>>>>>> 14d10aa82aeb4702e6bd0b1a1b4a42f18388d655

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
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


        </form>
    </x-jet-authentication-card>
</x-guest-layout>
