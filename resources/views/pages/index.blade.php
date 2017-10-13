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
<<<<<<< HEAD
       
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
=======
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
		<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>
    	<script src="js/bootstrap.js"></script>
     
       
    </head>
    <body>
    	@include('inc.nav')
	    	
        <!-- CONTENT -->
    	<section id="banner">
    		<div class="col-xs-12 web-banner">
                <img title="banner" src="{{ URL::to('/images/slide1.jpg') }}">
    		</div>
    	</section>
    	<section id="abt-tup">
    		<div class="col-xs-12 abt-tup">
    			<div class="container">
    				<div class="col-xs-6 tup-title">
    				<h2>TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES</h2>
	    			</div>
	    			<div class="col-xs-6 desc">
	    				<p>The Technological University of the Philippines was first established as the Manila Trade School in 1901 upon the enactment of Act No. 74 by the United States Philippine Commission for the instruction of the Filipinos on useful trades. Originally housed near Ateneo de Manila in Intramuros, MTS transferred to the Exposicion Regional de Filipinos in Calle Padre Faura. Six years later, the MTS transferred to the City Shops in Calle Arroceros. Industrial courses which included carpentry, English, telegraphy, machine shop work, furniture making, wood carving, boat building, plumbing, blacksmithing, mechanical and architectural drawing were offered on the primary school level during this period because pupils at that time were already adults. They were studying certain trades which they intended to follow after leaving school. <br>
	    				&copy; <a href="http://www.tup.edu.ph" title="Technological University of the Philippines">tup.edu.ph</a>.
					</p>
	    			</div>
	    		</div>


    		</div>
    	</section>

    	<section id="abt-cos">
    		<div class="col-xs-12 abt-cos">
    			<div class="container">
	    			<div class="col-xs-6 desc">
	    				<p>By virtue of Presidential Decree No. 1518, the Philippine College of Arts and Trades (PCAT) was converted into the Technological University of the Philippines (TUP) on June 11, 1976. The conversion to a university status brought about comprehensive changes in the organizational set-up. To carry out its tasks, the University had to change its one-college structure to a system composed of six colleges, one of which is the College of Arts and Sciences (CAS). The CAS was created in 1979 with its four departments, namely: the Languages, the Social and Behavioral Sciences, the Mathematics and Physical Sciences, and the Physical Education.

						In 1991, the College was mandated to perform dual roles: as a service college and as a science college. On July 24, 1995, the TUP Board of Regents through Referendum No. 13, s. 1995 approved the devolution of some Master Programs of the Graduate School to the mother colleges. Since then, the granting of the degrees in the Master of Arts in Teaching with specializations in Mathematics, Physics, Chemistry, and General Science has become the responsibility of the College of Arts and Sciences.

						On September 15, 1995, the University Board of Regents authorized to split the College of Arts and Sciences into the College of Science and the College of Liberal Arts. The new College of Science was structured to include graduate programs in Mathematics, Chemistry, Physics, and General Science. The college also offers five (5) baccalaureate programs, namely: Bachelor of Science in Computer Science, Bachelor of Science in Information Technology, Bachelor of Science in Information Systems, Bachelor of Science in Environmental Science and Bachelor of Applied Science Major in Laboratory Technology.<br>
	    				&copy; <a href="http://www.tup.edu.ph" title="Technological University of the Philippines">tup.edu.ph</a>.
					</p>
	    			</div>
	    			<div class="col-xs-6 tup-title">
    				<h2>COLLEGE OF SCIENCE</h2>
	    			</div>
	    		</div>
    		</div>
    	</section>
    	<section id="accreditation">
    		<div class="col-xs-12">
    			<div class="container">
    		 	kikoih
    			</div>	
    		</div>
    	</section>
    	<!-- END OF CONTENT SECTION -->
	@include('inc.footer')
>>>>>>> f2f2fb856eeb5d140afbb0e30a9ef719be4e0910
    </body>
</html>
