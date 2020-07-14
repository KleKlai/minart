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
            justify-content: start;
            gap: 30px;
            
            grid-template-areas: 
                "left picture";
        }

        #pattern {
            width: 100%;
            background: url('/images/spattern.png');
            background-repeat: repeat;
            background-size: 34px 27px;
        }

        
        .root {
            margin-top: 50px;
            display: grid;
            gap: 30px;
            grid-template-areas: 
                "logo form"
        }

        .logo { grid-area: logo;}
        .form { grid-area: form;}

        input {
            padding: 5px;
            width: 100%;
            height: 40px;
            margin-bottom: 10px;

            background-color: transparent;
            border-bottom: 2px solid black;
            border: none;
            outline: none;
            border-bottom: 1px solid gray;
        }

        select {
            padding: 5px;
            width: 100%;
            height: 40px;
            margin-bottom: 10px;

            background-color: transparent;
            border-bottom: 2px solid black;
            border: none;
            outline: none;
            border-bottom: 1px solid gray;

        }

        .back {
            font-size: 30px;
            color: black;
            text-decoration: none;
        }

        .link {
            font-size: 30px;
            text-decoration: none;
            color: #b78032;
            font-weight: bold;
        }

        .link:hover{
            text-decoration: none;
            color: #5e4119;
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- <sign-me-up-component></sign-me-up-component> -->
        <div id="pattern">
            <img src="/images/spattern.png" alt="">
        </div>

        <div class="container">
            <div class="left">
                <div class="root">
                    <div class="logo">
                        <a href="/"><img src="/images/logo.png" alt="Mindanao Art Logo"></a>
                    </div>

                    <form method="POST" action="{{ route('signmeup.store') }}">
                        @csrf
                        <h1><a class="back" href="/"><font-awesome-icon icon="angle-left" /></a> Register</h1>
                        <input type="text" placeholder="Fullname" name="fullname">
                        <input type="email" placeholder="Email" name="email">
                        <select id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <input type="date" placeholder="Birthday" name="birthday">
                        <input type="text" placeholder="What are you? (Doctor, Lawyer, etc)" name="proffession">
                        <p>By signing up, you agreed to receive email notification relating to the Mindanao Art Fair.</p>
                        <button type="submit">SUBMIT >>></button>
                    </form>
                </div>
            </div>
            <div class="picture">
                <img src="/images/image1.png" alt="Image1">
            </div>
        </div>
        

        <div class="container">
            <p>Copyright 2020. Mindanao Art</p>
        </div>
        
    </div>
</body>
</html>
