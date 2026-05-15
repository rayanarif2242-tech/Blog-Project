<x-guest-layout>
    <x-authentication-card>

        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- EMAIL -->

            <div>
                <x-label for="email" value="{{ __('Email') }}" />

                <x-input id="email"
                         class="block mt-1 w-full"
                         type="email"
                         name="email"
                         :value="old('email')"
                         required
                         autofocus
                         autocomplete="username" />
            </div>

            <!-- PASSWORD -->

            <div class="mt-4">

                <x-label for="password" value="{{ __('Password') }}" />

                <x-input id="password"
                         class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required
                         autocomplete="current-password" />

            </div>

            <!-- REMEMBER -->

            <div class="block mt-4">

                <label for="remember_me" class="flex items-center">

                    <x-checkbox id="remember_me" name="remember" />

                    <span class="ms-2 text-sm text-gray-600">
                        {{ __('Remember me') }}
                    </span>

                </label>

            </div>

            <!-- LOGIN BUTTON -->

            <div class="mt-6">

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-dark font-semibold border border-dark py-3 rounded-md transition duration-300">

                    Login

                </button>

            </div>

            <!-- FORGOT PASSWORD -->

            <div class="flex justify-end mt-4">

                @if (Route::has('password.request'))

                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">

                        {{ __('Forgot your password?') }}

                    </a>

                @endif

            </div>

            <!-- GOOGLE LOGIN -->

            <div class="mt-5">

                <a href="{{ url('auth/google') }}"
                   class="w-full flex justify-center items-center gap-3 bg-white text-black py-3 rounded-md border border-gray-300 hover:bg-gray-100 transition duration-300">

                    <!-- GOOGLE ICON -->

                    <svg class="w-5 h-5" viewBox="0 0 48 48">

                        <path fill="#EA4335"
                            d="M24 9.5c3.1 0 5.9 1.1 8.1 3.1l6-6C34.9 2.5 29.8 0 24 0 14.8 0 6.9 5.6 2.7 13.7l7.4 5.8C12 13 17.5 9.5 24 9.5z"/>

                        <path fill="#4285F4"
                            d="M46.1 24.5c0-1.6-.1-2.7-.4-3.9H24v7.4h12.6c-.3 2-1.6 5-4.6 7l7.1 5.5c4.2-3.9 6.6-9.7 6.6-16z"/>

                        <path fill="#FBBC05"
                            d="M10.1 28.5c-1-2-1.6-4.1-1.6-6.5s.6-4.5 1.6-6.5L2.7 9.7C1 12.9 0 16.3 0 20s1 7.1 2.7 10.3l7.4-5.8z"/>

                        <path fill="#34A853"
                            d="M24 48c6.5 0 11.9-2.1 15.9-5.8l-7.1-5.5c-2 1.4-4.7 2.3-8.8 2.3-6.5 0-12-4.4-14-10.5l-7.4 5.8C6.9 42.4 14.8 48 24 48z"/>

                    </svg>

                    Continue with Google

                </a>

            </div>

        </form>

    </x-authentication-card>
</x-guest-layout>