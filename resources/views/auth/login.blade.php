{{-- <x-guest-layout>
    <a href="/" class="flex justify-center items-center">
        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
    </a>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4 mt-4" :errors="$errors" />

    <form method="POST" action="{{ route('login') }}" class="mt-4">
        @csrf

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />
            <x-input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-3">
            <x-label for="password" :value="__('Password')" />
            <x-input type="password" name="password" id="password" required autocomplete="current-password" />
        </div>

        <div class="flex justify-between mt-4">
            <!-- Remember Me -->
            <div>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-indigo-600" name="remember">
                    <span class="mx-2 text-gray-600 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div>
                @if (Route::has('password.request'))
                    <a class="block text-sm fontme text-indigo-700 hover:underline" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                @endif
            </div>
        </div>

        <div class="mt-6">
            <x-button class="w-full">
                {{ __('Log in') }}
            </x-button>
        </div>

    </form>
</x-guest-layout> --}}


@extends('layouts.public')
@section('title', 'Welcome')
@section('content')


    <div class="user-form-area pt-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="user-form-item">
                        <a class="logo" href="/">
                            <img src="frontend-assets/img/logo2.png" alt="Logo">
                        </a>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        @if (session('error'))
                            <div class="bg-white border mb-4 border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4 mt-4" :errors="$errors" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input name="email" id="email" value="{{ old('email') }}" required autofocus
                                    class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" required
                                    autocomplete="current-password" class="form-control" placeholder="Password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="common-btn">
                                    Sign In
                                    <span></span>
                                </button>
                            </div>
                            <ul class="remember align-items-center">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">Remember Me</label>
                                    </div>
                                </li>
                                <li>
                                    @if (Route::has('password.request'))
                                        <a class="block text-sm fontme text-indigo-700 hover:underline"
                                            href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                    @endif
                                </li>
                            </ul>
                            <h4>Or</h4>
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                            <p>Didn't have an account? <a href="/register">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="go-top">
        <i class="bx bxs-up-arrow-alt"></i>
        <i class="bx bxs-up-arrow-alt"></i>
    </div>



@endsection
