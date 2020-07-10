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
    </head>
    <body>
        <img src="http://127.0.0.1:8000/images/pattern.png" alt="">
        <div class="container">
            <img src="http://127.0.0.1:8000/images/logo.png" alt="Mindanao Art Logo">
            <img src="http://127.0.0.1:8000/images/image1.png" alt="Image1">
            <a href="/signmeup">Sign Me Up</a>
        </div>
    </body>
</html>
