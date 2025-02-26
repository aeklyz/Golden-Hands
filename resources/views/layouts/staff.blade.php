<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Golden Hands') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.icloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Consolidated CSS files -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <style>
        /* Optional inline styles for the chart container */
        .chart-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        /* Each chart canvas will take about 45% width on larger screens */
        .chart-container canvas {
            flex: 1 1 45%;
            max-width: 45%;
        }
    </style>
</head>

<body>
    @include('layouts.navigation')

    <!-- Page Heading -->
    @isset($header)
        {{ $header }}
    @endisset

    <!-- Page Content -->
    <main>
        <!-- Main Container -->
        <div class="container">
            @include('layouts.sidebar')
            {{ $slot }}
        </div>
    </main>

    @include('layouts.footer')
</body>

</html>