@extends('layouts.app')

@section('css')
    <style>
        .root {
            margin-top: 50px;
            display: grid;
            grid-template-areas: 
                "logo form"
        }

        .logo { grid-area: logo;}
        .form { grid-area: form;}
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
            <button>SUBMIT >>></button>
        </div>
    </div>
@endsection