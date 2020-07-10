<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            .container {
                display: grid;
                grid-template-areas: 
                    "logo picture"
                    "time picture"
                    "signup picture";
            }

            .logo { grid-area: logo;}
            .time { grid-area: time;}
            .signup { grid-area: signup;}
            .picture { grid-area: picture;}
        </style>
    </head>
    <body>
        <img src="http://127.0.0.1:8000/images/pattern.png" alt="">
        <div class="container">
            <div class="logo">
                <img src="http://127.0.0.1:8000/images/logo.png" alt="Mindanao Art Logo">
            </div>
            <div class="time">
                <h1>Living Art in New Landscape</h1>
            </div>
            <div class="signup">
                <a href="/signmeup">Sign Me Up > > ></a>
                <p>To get up-to-date news</p>
            </div>
            <div class="picture">
                <img src="http://127.0.0.1:8000/images/image1.png" alt="Image1">
            </div>
            <p>Copyright 2020. Mindanao Art</p>
        </div>
    </body>
</html>
