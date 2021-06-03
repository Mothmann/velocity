<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity : Forgot-password</title>
</head>
<body>


<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="title">
            {{ __('Forgot your password? No problem.') }}
        </div>
        <div class="description">
            {{ __('Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="button">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
</body>
</html>
<style>
    body{
        background: rgb(34, 34, 34);
        color: white;
    }
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    .title{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 3rem;
        letter-spacing: 3px;
        font-weight: 700;
        color: rgb(255, 183, 0);
        margin: 2% 5%;
    }
    .description{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 2rem;
        margin-left: 5%;
        margin-right: 5%;
        margin-bottom: 5%;
    }
    .block {
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
    }
    .block label{
        font-size: 1.6rem;
    }
    .block input{
        width: 50%;
        padding: 1rem;
        margin: 20px 0px;
        border: none;
        border-bottom: 5px solid rgb(255, 183, 0);
    }
    .button button{
        padding: 0.5rem 2rem;
        font-size: 1.2rem;
        background: rgb(255, 183, 0);
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.5s;
        text-align: center;
    }
    .button{
        display: flex;
        flex-direction: row;
        align-content: center;
        justify-content: center;
        align-items: center;
    }
</style>
