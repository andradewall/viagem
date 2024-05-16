<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="tallstackui_darkTheme()"
    x-bind:class="{ 'dark bg-gray-700': darkTheme, 'bg-sky-50': !darkTheme }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <tallstackui:script />
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-sky-950 dark:text-white/50 max-w-screen-lg mx-auto">
        @include('layouts.navbar')

        <x-ts-toast />
        <x-ts-dialog />

        {{ $slot }}

        @include('layouts.footer')
        @livewireScripts
    </body>
</html>
