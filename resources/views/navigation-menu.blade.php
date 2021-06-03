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
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="{{url("/about")}}"><i class="fas fa-address-card"></i></a></li>
            <li><a href="{{url("/contact")}}"><i class="fas fa-file-signature"></i></a></li>
            <li><a class="active" href="{{ url('/dashboard') }}" id="x1"><i class="fas fa-tachometer-alt"></i></a></li>
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
                        <i class="fas fa-users-cog"></i>
                    </x-jet-nav-link></li></a>
                    <div class="dropdown-content">
                        <li><a href="{{ url('/admin/trip') }}"><i class="fas fa-suitcase"></i></a></li>
                    <li><a href="{{ url('/admin/train') }}"><i class="fas fa-train"></i></a></li>
                    <li><a href="{{ url('/admin/location') }}"><i class="fas fa-location-arrow"></i></a></li>
                </div>
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
