<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <livewire:styles />
        @vite(['resources/css/app.scss'])
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body class="bg-gradient">
        {{ $slot }}

        <livewire:scripts />
        @vite(['resources/js/app.js'])
    </body>
</html>
