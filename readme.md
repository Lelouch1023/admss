<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>TUP - Accreditation Document Management System</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
    	 @include('inc.nav')
        <!-- CONTENT -->

        <div class="content">
    	<section id="banner">
    		<div class="web-banner">
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
        </div>

    	<!-- END OF CONTENT SECTION -->
	@include('inc.footer')
    	
    </body>
</html>
