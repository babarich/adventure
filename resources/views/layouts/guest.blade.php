<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Adventure Website') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link id="style" href="{{asset('assets/ynex/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >

        <!-- Style Css -->
        <link href="{{asset('assets/ynex/css/styles.min.css')}}" rel="stylesheet" >

        <!-- Icons Css -->
        <link href="{{asset('assets/ynex/css/icons.min.css')}}" rel="stylesheet" >

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style type="text/css">
            .account-block{

    min-height: 100vh;
    background-color: #EC6608;
    background-position: center;
    background-size: cover;
    background-blend-mode: multiply;
    overflow: hidden;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
                {{ $slot }}

    </body>


    <!-- Bootstrap JS -->
    <script src="{{asset('assets/ynex/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Show Password JS -->
    <script src="{{asset('assets/ynex/js/show-password.js')}}"></script>
</html>
