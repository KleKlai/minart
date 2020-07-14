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



        <form method="POST" action="{{ route('artist.store') }}">
            @csrf

            <!-- <div class="form-row">
            <div class="form-group col">
                <label for="name" class="font-bold">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div> -->

            <div class="form-group col">
                <label for="group_id" class="font-bold">Group</label>
                <select class="form-control" id="group_id" name="group_id">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </form>
    </div>
</body>
</html>
