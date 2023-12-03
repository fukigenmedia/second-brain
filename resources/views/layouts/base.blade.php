<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link
        href="{{ url(asset('favicon.ico')) }}"
        rel="shortcut icon"
    >

    <!-- Fonts -->
    <link
        href="https://rsms.me/inter/inter.css"
        rel="stylesheet"
    >

    <!-- Scripts & Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    @tallStackUiScript
    @tallStackUiStyle
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts

    <!-- CSRF Token -->
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
</head>

<body>
    @yield('body')
</body>

</html>
