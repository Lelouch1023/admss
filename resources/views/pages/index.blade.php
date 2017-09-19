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
    	<section id="header">
    		<!-- TOP BAR -->
	    	<div id="top-bar">
	    		<div class="container">
		            <img src="{{ URL::to('/images/phgov.png') }}">
		            <a href="http://tup.edu.ph/" title="tup.edu.ph">Technological University of the Philippines</a> 
	    		</div>
	    	</div>
	    	<!-- END OF TOP BAR -->
	    	<!-- NAVIGATION -->
    		<nav class="col-sm-12 navbar home-header home-name ">
    			<div class="container">
                	<div class="col-md-4 navbar-header">
                	<!-- Collapsed Hamburger -->
	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
	                        <span class="sr-only">Toggle Navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
	                    <!-- ADMS BRANDING -->
	                        <a class="navbar-brand" href="{{ url('/') }}">
	                            <p>ACCREDITATION <br />DOCUMENT MANAGEMENT <br /> SYSTEM</p>
	                        </a>
                    </div>

                	<div class="col-md-8 collapse navbar-collapse " id="app-navbar-collapse">
	                    <ul class="nav navbar-nav">
			              <li class="col-md-6 home-logo"><img src="{{ URL::to('/images/logo.png') }}">
		            	  </li>
			              @if (Route::has('login'))
	                      <li class="col-md-6 home-login-reg">
	                      @auth
			                <button class="">
			                    <a href="{{ url('/home') }}">Home</a>
			                </button>
			               @else
			                <button class="login-btn"><a href="{{ route('login') }}">Login</a></button>
			                <button class="reg-btn"><a href="{{ route('register') }}">Register</a></button>
			               @endauth
			               </li>
	                    </ul>
		            </div>
	            		@endif
        		</div>
    		</nav>
    		<!-- END OF NAVIGATION -->
    	</section>
        
        <!-- CONTENT -->
    	<section id="content">
    		<div class="col-xs-12">
    		<!-- IMAGE SLIDER -->
    			<div class="image-slider">
	              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	                <ol class="carousel-indicators">
	                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	                </ol>
	                <div class="carousel-inner" role="listbox">
	                  <div class="carousel-item active">
	                    <img class="d-block img-fluid" src="images/slide1.jpg" alt="First slide">
	                  </div>
	                  <!-- <div class="carousel-item">
	                    <img class="d-block img-fluid" src="images/slide2.jpg" alt="Second slide">
	                  </div>
	                  <div class="carousel-item">
	                    <img class="d-block img-fluid" src="images/slide1.jpg" alt="Third slide">
	                  </div> -->
	                </div>
	                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                  <span class="sr-only">Previous</span>
	                </a>
	                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                  <span class="sr-only">Next</span>
	                </a>
	              </div>
	            </div>
	        <!-- END OF IMAGE SLIDER -->

	            <div class="container">
	              	<img class="divider" src="images/divider.png">
	              	<div class="col-xs-12 accreditation-details">
		              <div class="accre-title">
		                <img class="col-xs-4" src="images/typo-accre.png">
		                <div class=" col-xs-8 accre-details">
		                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting
		                    industry. Lorem Ipsum has been the industry's standard dummy 
		                    ever since the1500s, when an unknown  printer took a galley of  
		                    and scrambled it to make a type specimen book. It has survived 
		                    only five centuries, but also the leap  into electronic typesettg, 
		                    remaining essentially unchanged.It was popularised in the 1960h 
		                    the relea software like Aldus PageMaker including versions of</p>
		                </div> 
		              </div>
	            	</div>
		        </div>
    		</div>
    	</section>
    	<!-- END OF CONTENT SECTION -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
     
    </body>
</html>
