<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" sizes="16x16" type="image/png" href="{{ asset('images/logo.png') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ADMS') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notifbutton.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
    
</head>
<body>

@include('inc.nav')
    <div id="app">
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

@include('inc.footer')
    <!-- Scripts -->
<<<<<<< HEAD
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/notif.js"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
=======
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
>>>>>>> c18200f44816790065f31db1af8b6e7a952ca77b
</body>
</html>
