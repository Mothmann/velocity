<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{url("/images/logo2.png")}}" alt="">
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="{{url("/")}}">Home</a></li>
            <li><a href="{{url("/about")}}">About</a></li>
            <li><a href="{{url("/contact")}}">Contact</a></li>
            <li><a class="active" href="{{ url('/dashboard') }}">Dashboard</a></li>
            <div class="dropdown">
                <li class="fuck"><a href="#"><i class="fas fa-user"></i></a></li>
                <div class="dropdown-content">
                <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <li><a><x-jet-responsive-nav-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}</a></li>
                        <li><a></x-jet-responsive-nav-link></a></li>
                </form>
                <li><a><x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                            {{ __('Profile') }}
                </x-jet-responsive-nav-link></a></li>
                </div>
            </div>
            <li><a href="{{url("/tickets")}}">Tickets</a></li>
            <div>
                @if (auth()->user()->role_id == 2)
                    <li><a><x-jet-nav-link href="{{ route('admin.test.index') }}" :active="request()->routeIs('testa')">
                        {{ __('testa') }}
                    </x-jet-nav-link></li></a>
                @endif
                @if (auth()->user()->role_id == 1)
                    <li><a><x-jet-nav-link href="{{ route('client.test.index') }}" :active="request()->routeIs('testb')">
                        {{ __('testb') }}
                    </x-jet-nav-link></li></a>
                @endif
            </div>
        </ul>
    </nav>
    <div class="empty"></div>
    <div class="middle">
        <div class="welcome">

        </div>
    </div>

        <!-- Settings Dropdown -->
            <div class="ml-3 relative">
            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">

                </x-slot>

                <x-slot name="content">
                    <!-- Account Management -->
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                    @endif

                    <div class="border-t border-gray-100"></div>

                    <!-- Authentication -->

                        @csrf


                    </form>
                </x-slot>
            </x-jet-dropdown>
        </div>
    </div>
<!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">

    <div class="mt-3 space-y-1">
        <!-- Account Management -->
        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
            <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                {{ __('API Tokens') }}
            </x-jet-responsive-nav-link>
        @endif

        <!-- Authentication -->


        <!-- Team Management -->
            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
            <div class="border-t border-gray-200"></div>

            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Team') }}
            </div>

            <!-- Team Settings -->
                <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                {{ __('Team Settings') }}
            </x-jet-responsive-nav-link>

            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                    {{ __('Create New Team') }}
                </x-jet-responsive-nav-link>
            @endcan

            <div class="border-t border-gray-200"></div>

            <!-- Team Switcher -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Switch Teams') }}
            </div>

            @foreach (Auth::user()->allTeams() as $team)
                <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
            @endforeach
        @endif
    </div>

<script>
   var icon = document.getElementById("icon");

   let localData = localStorage.getItem("theme");

   if(localData == "light"){
       icon.src = "{{url("/images/moon.png")}}";
       document.body.classList.remove("light-mode");
   }
   else if(localData == "dark"){
       icon.src = "{{url("/images/sun.png")}}";
             document.body.classList.remove("light-mode");
   }

    localStorage.setItem("theme" , "light");

    icon.onclick = function() {
        document.body.classList.toggle("light-mode");
        if(document.body.classList.contains("light-mode")){
            icon.src = "{{url("/images/moon.png")}}"
            localStorage.setItem("theme" , "light");
        }
        else{
            icon.src = "{{url("/images/sun.png")}}"
            localStorage.setItem("theme" , "dark");
        }
    }
</script>
</body>
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
                min-width: 160px;
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
                margin-bottom: 1%;
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
                width: 30%;
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
                margin-bottom: 5%;
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
                background-color: rgb(34,34,34);
                color: white;
                transition: 0.3s linear;
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
                margin-top: 3%;
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
            }

        </style>
