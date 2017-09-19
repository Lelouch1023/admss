<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <title>TUP - Accreditation Document Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />

       
    </head>
    <body>
    	<section id="">
    		
    	</section>
        <div class="col-sm-12 home-header">
	        	<div class="col-md-4 col-sm-4 col-xs-6 home-logo">
	               <img src="{{ URL::to('/images/tup-logo.png') }}">
	            </div>
	            <div class="col-md-4 col-sm-4 col-xs-6 home-name">
	                <p>ACCREDITATION <br />DOCUMENT MANAGEMENT <br /> SYSTEM</p>
	            </div>
	              @if (Route::has('login'))
                <div class="col-md-4 col-sm-4 col-xs-12 home-login-reg">
                    @auth
                        <button class="">
                            <a href="{{ url('/home') }}">Home</a>
                        </button>
                    @else
                        <button class="login-btn"><a href="{{ route('login') }}">Login</a></button>
                        <button class="reg-btn"><a href="{{ route('register') }}">Register</a></button>
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
