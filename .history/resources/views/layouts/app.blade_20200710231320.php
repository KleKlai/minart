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

            <div class="form-row">
            <div class="form-group col">
                <label for="name" class="font-bold">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>

            <div class="form-group col">
                <label for="group_id" class="font-bold">Group</label>
                <select class="form-control" id="group_id" name="group_id">
                    <option value="0"></option>
                    @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>
            </div>

            <div class="form-group">
                <label for="description" class="font-bold">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-default" href="{{ route('artist.index') }}">Cancel</a>
        </form>
    </div>
</body>
</html>
