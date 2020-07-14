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
                margin-top: 50px;
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

            #pattern {
                width: 100%;
                background: url('/images/spattern.png');
                background-repeat: repeat;
                background-size: 34px 27px;
            }

            a {
                font-size: 30px;
                text-decoration: none;
                color: gold;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <landing-component></landing-component>
        </div>
    </body>
</html>
