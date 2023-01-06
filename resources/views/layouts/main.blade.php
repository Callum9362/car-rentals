<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Car Rentals</title>

        @livewireStyles
    </head>
    <x-header></x-header>
    <body>
    @yield('page')


    @livewireScripts
    </body>
    <x-footer></x-footer>
</html>
