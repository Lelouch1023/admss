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
	    	<nav class="navbar navbar-default ">
	    	<div class="top-bar">
	    		<div class="container">
	    			<div class="col-md-6">
		            <img src="{{ URL::to('/images/phgov.png') }}">
		            <a href="http://tup.edu.ph/" title="tup.edu.ph">Technological University of the Philippines</a>
	    			</div>
		            <div class="col-md-6 right-top-link">
		            <a href="#" title="">Home</a>
		            <a href="#" title="">Contact</a>
		            <a href="#" title="">About</a>
		            </div> 
	    		</div>
	    	</div>
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
			      <a class="navbar-brand" href="#">ACCREDITATION<br>DOCUMENT MANAGEMENT<br>SYSTEM</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="col-md-8 nav navbar-nav">
			        <li class="col-md-6 home-logo active"><img src="{{ URL::to('/images/logo.png') }}"></li>
			        	@if (Route::has('login'))
			        <li class="col-md-6 home-login-reg">
	                      @auth
			                <button class="">
			                    <a href="{{ url('/home') }}">Home</a>
			                </button>
			               @else
			                <button class="login-btn" type="submit"><a href="{{ route('login') }}">Login</a></button>
			                <button class="reg-btn" type="submit" ><a href="{{ route('register') }}">Register</a></button>
			               @endauth
			        </li>
	            		@endif

			        <!-- <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li>
			      </ul> -->
			      <!-- <form class="navbar-form navbar-left">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			      </form> -->
			      <!-- <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Link</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			          </ul>
			        </li>
			      </ul> -->
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			  </div><!-- /.home-header -->
			</nav>
	    	<!-- <div class="collapse navbar-collapse" id="app-navbar-collapse"> 
                    
             </div>
    		<nav class="col-sm-12 navbar home-header home-name ">
    			<div class="container">
                	<div class="col-md-4 navbar-header">
	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
	                        <span class="sr-only">Toggle Navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
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
    		</nav> -->
    	</section>
        
        <!-- CONTENT -->
    	<section id="content">








    		<div class="col-xs-12">
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
		                    the relea software like Aldus PageMaker including versions of
		                  </p>


		                </div> 
		              </div>
	            	</div>
		        </div>
    		</div>
    	</section>
    	<!-- END OF CONTENT SECTION -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
     
    </body>
</html>
