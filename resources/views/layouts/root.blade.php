<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
        @vite('resources/css/app.css')

        <title>Home - LaravelMVC</title>
    </head>
    <body class="bg-gradient-to-r from-pink-500 to-purple-600 text-white w-full min-h-screen flex-col">
    <div>
        @include('components.navbar')
    </div>

    <div class="px-16">
        @yield('content')
    </div>
    <div class="">
        @include('components.footer')
    </div>
    @vite('resources/js/app.js')
    </body>
</html>
