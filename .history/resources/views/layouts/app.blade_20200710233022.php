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
        #app {
            margin-top: 17px;
        }
    </style>
    @yield('css')
</head>
<body>
    <div id="app">
        <!-- <sign-me-up-component></sign-me-up-component> -->
        
        <div class="logo">
            <a href="/"><img src="/images/logo.png" alt="Mindanao Art Logo"></a>
        </div>

        <form method="POST" action="{{ route('signmeup.store') }}">
            @csrf
            <h1><a class="back" href="/"><font-awesome-icon icon="angle-left" /></a> Register</h1>
            <input type="text" placeholder="Fullname" id="fullname">
            <input type="email" placeholder="Email">
            <div class="form-group col">
                <select class="form-control" id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <input type="date" placeholder="Birthday">
            <input type="text" placeholder="What are you? (Doctor, Lawyer, etc)">
            <p>By signing up, you agreed to receive email notification relating to the Mindanao Art Fair.</p>
            <button type="submit">SUBMIT >>></button>
            <!-- <a class="link" type="submit" >SUBMIT
                <font-awesome-icon icon="angle-right" />
                <font-awesome-icon icon="angle-right"></font-awesome-icon>
                <font-awesome-icon icon="angle-right" /></a> -->
        </form>
    </div>
</body>
</html>
