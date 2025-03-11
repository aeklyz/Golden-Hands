<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Golden Hands') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Consolidated CSS files -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    </head>
    <body>
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            {{ $header }}
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @include('layouts.footer')
        @include('layouts.chatbot')
    </body>
</html>
