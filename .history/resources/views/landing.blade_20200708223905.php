@extends('layouts.app');

@section('css')
    <!-- <style>
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
    </style> -->
@endsection

@section('content')
        <!-- <div class="time">
            <h1>Living Art in New Landscape</h1>
        </div>
        <div class="signup">
            <a href="/signmeup">SIGN ME UP > > ></a>
            <p>To get up-to-date news</p>
        </div> -->

        
        <a href="/signmeup">SIGN ME UP > > ></a>
@endsection