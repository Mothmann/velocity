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

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="text-white bg-indigo-600 hover:bg-indigo-500 px-10 py-4 w-full rounded-md text-center transition duration-150 ease-in-out" href="{{ route('auth.facebook') }}">
                    Sign in with Facebook
                </a>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="text-white bg-red-600 hover:bg-red-500 px-10 py-4 w-full rounded-md text-center transition duration-150 ease-in-out" href="{{ route('auth.google') }}">
                    Sign in with Google
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
