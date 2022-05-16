<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
        @include('layouts.navigation')

        <div class="flex overflow-hidden flex-col flex-1">
            @include('layouts.header')

            <main class="overflow-y-auto overflow-x-hidden flex-1 bg-gray-200">
                <div class="container px-6 py-8 mx-auto">
                    <h3 class="mb-4 text-3xl font-medium text-gray-700">
                        {{ $header }}
                    </h3>
                    @section('message')
                        @if (session('success'))
                            <div class="inline-flex overflow-hidden w-full bg-white rounded-lg shadow-md">
                                <div class="flex justify-center items-center w-12 bg-blue-500">
                                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
                                    </svg>
                                </div>

                                <div class="px-4 py-2 -mx-3">
                                    <div class="mx-3">
                                        <span class="font-semibold text-blue-500">Info</span>
                                        <p class="text-sm text-gray-600"> {{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                            <br /><br />
                        @endif
                        @if (session('error'))
                            <div class="inline-flex overflow-hidden w-full bg-white rounded-lg shadow-md">
                                <div class="flex justify-center items-center w-12 bg-blue-500">
                                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
                                    </svg>
                                </div>

                                <div class="px-4 py-2 -mx-3">
                                    <div class="mx-3">
                                        <span class="font-semibold text-blue-500">Info</span>
                                        <p class="text-sm text-gray-600"> {{ session('error') }}</p>
                                    </div>
                                </div>
                            </div>
                            <br /><br />
                        @endif
                    @endsection
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>

</html>
