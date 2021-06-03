<body>
<x-jet-action-section>
    <x-slot name="title">
        <div class="title">
            {{ __('Browser Sessions') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="description">
            {{ __('Manage and log out your active sessions on other browsers and devices.') }}
        </div>
    </x-slot>

    <x-slot name="content">
        <div class="content">
            {{ __('If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.') }}
        </div>

        @if (count($this->sessions) > 0)
            <div class="mt-5 space-y-6">
                <!-- Other Browser Sessions -->
                @foreach ($this->sessions as $session)
                    <div class="flex items-center">
                        <div>
                            @if ($session->agent->isDesktop())
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                    <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-gray-500">
                                    <path d="M0 0h24v24H0z" stroke="none"></path><rect x="7" y="4" width="10" height="16" rx="1"></rect><path d="M11 5h2M12 17v.01"></path>
                                </svg>
                            @endif
                        </div>

                        <div class="ml-3">
                            <div class="text-sm text-gray-600">
                                {{ $session->agent->platform() }} - {{ $session->agent->browser() }}
                            </div>

                            <div>
                                <div class="text-xs text-gray-500">
                                    {{ $session->ip_address }},

                                    @if ($session->is_current_device)
                                        <span class="text-green-500 font-semibold">{{ __('This device') }}</span>
                                    @else
                                        {{ __('Last active') }} {{ $session->last_active }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="flex items-center mt-5">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">log out</button>
           </form>

            <x-jet-action-message class="ml-3" on="loggedOut">
                {{ __('Done.') }}
            </x-jet-action-message>
        </div>

        <!-- Log Out Other Devices Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingLogout">
            <x-slot name="title">
                {{ __('Log Out Other Browser Sessions') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="logoutOtherBrowserSessions" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <li><button  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">log out</button></li>
               </form>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
</body>
<footer class="footer">
    <div class="footer-left">
        <img src="{{url("images/logo2.png")}}" alt="">
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
        <img class="footer-dark-mode" src="{{url("images/sun.png")}}" id="icon">
    </div>
</footer>
<script>
    var icon = document.getElementById("icon");

    let localData = localStorage.getItem("theme");

    if(localData == "light"){
        icon.src = "{{url("images/moon.png")}}";
        document.body.classList.remove("light-mode");
    }
    else if(localData == "dark"){
        icon.src = "{{url("images/sun.png")}}";
              document.body.classList.remove("light-mode");
    }

     localStorage.setItem("theme" , "light");

     icon.onclick = function() {
         document.body.classList.toggle("light-mode");
         if(document.body.classList.contains("light-mode")){
             icon.src = "{{url("images/moon.png")}}"
             localStorage.setItem("theme" , "light");
         }
         else{
             icon.src = "{{url("images/sun.png")}}"
             localStorage.setItem("theme" , "dark");
         }
     }
 </script>
<style>
    .light-mode .title{
        color: rgb(34, 34, 34)
    }
    .content{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 1.2rem;
        color: #dd4b39;
        height: auto;
    }
    svg.w-8.h-8.text-gray-500 {
        width: 30px;
        margin: 2%;
        display: flex;
    }
    .flex.items-center{
        display: flex;
        flex-direction: row;
        align-content: center;
        justify-content: center;
        align-items: center;
        margin-top: 3%;
    }
    .mt-5.space-y-6 {
        margin-bottom: 2%;
    }
    .ml-3 {
        margin-left: 3%;
    }
    button{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        margin-top: 2%;
        background: rgb(255, 183, 0);
        color: white;
        padding: 1% 3%;
        border: none;
        border-radius: 15px;
        transition: 0.3s ease-in-out;
        font-size: 1rem;
        padding: 0.5rem 1.5rem;
    }
    button:hover{
        transform: scale(1.1);
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
</style>
