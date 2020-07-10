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
        .container {
            display: grid;
            gap: 30px;
            
            grid-template-areas: 
                "left picture";
        }

        .logo { grid-area: logo; justify-self: start;}
        .time { grid-area: time;}

        #pattern {
            width: 100%;
            background: url('/images/spattern.png');
            background-repeat: repeat;
            background-size: 34px 27px;
        }
    </style>
    @yield('css')
</head>
<body>
    <div id="app">
        <sign-me-up-component></sign-me-up-component>
        <!-- <div id="pattern">
            <img src="/images/spattern.png" alt="">
        </div>

        <div class="container">
            <div class="left">
                @yield('content')
            </div>
            <div class="picture">
                <img src="/images/image1.png" alt="Image1">
            </div>
        </div>

        <div class="container">
            <p>Copyright 2020. Mindanao Art</p>
        </div> -->
    </div>

    <script>
        import { library } from '@fortawesome/fontawesome-svg-core'
        import { faAngleRight } from '@fortawesome/free-solid-svg-icons'
        import { faAngleLeft } from '@fortawesome/free-solid-svg-icons'
        import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

        library.add(faAngleRight)
        library.add(faAngleLeft)
        Vue.component('font-awesome-icon', FontAwesomeIcon)
        Vue.config.productionTip = false
    </script>
</body>
</html>
