@extends('layouts.app')

@section('css')
    <style>
        .root {
            margin-top: 50px;
            display: grid;
            gap: 30px;
            grid-template-areas: 
                "logo form"
        }

        .logo { grid-area: logo;}
        .time { grid-area: time;}

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
@endsection

@section('content')
    <div class="root">
        <div class="logo">
            <a href="/"><img src="/images/logo.png" alt="Mindanao Art Logo"></a>
        </div>
        <div class="form">
            <h1>Register</h1>
            <input type="text" placeholder="Fullname">
            <input type="email" placeholder="Email">
            <input type="text" placeholder="Gender">
            <input type="date" placeholder="Birthday">
            <input type="text" placeholder="What are you? (Doctor, Lawyer, etc)">
            <p>By signing up, you agreed to receive email notification relating to the Mindanao Art Fair.</p>
            <a class="link" href="/signmeup">SUBMIT <font-awesome-icon icon="angle-right" />
                    <font-awesome-icon icon="angle-right" />
                    <font-awesome-icon icon="angle-right" /></a>
        </div>
    </div>
@endsection