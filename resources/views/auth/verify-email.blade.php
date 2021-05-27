<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity : Verify Email</title>
</head>
<body>


<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <div class="thanks"><h1>Thanks for signing up!</h1></div>
        <div class="getting-started">
            {{ __('Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="logout" type="submit">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

</body>
</html>
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
        }
        button.logout {
            padding: 0.5rem 6.8rem;
        }
        .thanks{
            display: flex;
            font-size: 35px;
            color: rgb(255,183,0);
            align-items: center;
            justify-content: center;
            margin-top: 3%;
            text-align: center;
        }

        .getting-started{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 75%;
            margin: auto;
            text-align: center;
            font-size: 25px;
        }
        button{
            color: white;
            padding: 0.5rem 1.5rem;
            font-size: 1.2rem;
            background: rgb(255,183,0);
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: 0.5s;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: auto;
            display: block;
            margin-top: 5%;
            text-decoration: none;
            transition: 0.3s;
        }
        button:hover{
            transform: scale(1.1);
        }
        @media screen and (max-width: 768px){
            .thanks{
                font-size: 30px;
                margin-bottom: 2%;
            }
            .getting-started{
                width: 80%;
                font-size: 20px
            }
        }
        @media screen and (max-width: 481px){
            .thanks{
                font-size: 20px;
                margin-bottom: 3%;
            }
        }
        @media screen and (max-width: 320px){
            button{
                width: 50%;
                font-size: 1rem;
            }
            button.logout{
                padding: 0.5rem 1.5rem;
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
