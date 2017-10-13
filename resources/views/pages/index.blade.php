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
    	 <nav class="navbar navbar-default ">
		  <div class="top-bar">
		    <div class="container">
		      <div class="col-md-6">
		        <img src="{{ URL::to('/images/phgov.png') }}">
		        <a href="http://tup.edu.ph/" title="tup.edu.ph">Technological University of the Philippines</a>
		      </div>
		      <div class="col-md-6 right-top-link">
		        <a href="/home" title="">Home</a>
		        <a href="#" title="">Contact</a>
		        <a href="#" title="">About</a>
		      </div> 
		    </div>
		  </div>
		  <!-- MAIN NAVIGATION -->
		  <div class="home-header">
		    <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="col-md-4 navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{ route('home') }}" title="Accreditation Document Management System">ACCREDITATION<br>DOCUMENT MANAGEMENT<br>SYSTEM</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="col-md-8 nav navbar-nav">
		        <li class="col-md-6 home-logo active"><img src="{{ URL::to('/images/logo.png') }}"></li>
		         @guest
		        <li class="col-md-6 home-login-reg">
		          <button class="login-btn" type="submit"><a href="{{ route('login') }}">Login</a></button>
		          <button class="reg-btn" type="submit"><a href="{{ route('register') }}">Register</a></button>
		        </li>
		         @else 
		      </ul>
		    </div>
		    </div>
		  </div>
		</nav>
		@endguest
        <!-- CONTENT -->
    	<!-- END OF CONTENT SECTION -->
    	<section id="content">
    		<div class="jumbotron">
    			<div class="col-xs-12">
    				sasda
    			</div>
    		</div>
    	</section>
     	@include('inc.footer')
    </body>
</html>
