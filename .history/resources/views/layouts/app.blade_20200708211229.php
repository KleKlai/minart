<!doctype html>
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
                "logo form picture";
        }

        .logo { grid-area: logo;}
        .form { grid-area: form;}
        .picture { grid-area: picture;}

        #pattern {
            width: 100%;
            background: url('/images/spattern.png');
            background-repeat: repeat;
            background-size: 34px 27px;
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div id="pattern">
                <img src="/images/spattern.png" alt="">
            </div>
            <div class="container">
                @yield('content')
                <div class="picture">
                    <img src="/images/image1.png" alt="Image1">
                </div>
            </div>
        </main>
        <div class="container">
            <p>Copyright 2020. Mindanao Art</p>
        </div>
    </div>
</body>
</html>
