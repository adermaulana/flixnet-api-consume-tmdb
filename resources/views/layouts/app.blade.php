<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/img/flixnet.png" type="image/x-icon">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>{{ $title ?? 'Home' }} - Flixnet</title>
    </head>
    <body class="bg-slate-950">
        <x-navbar/>
        {{ $slot }}
    </body>
</html>
