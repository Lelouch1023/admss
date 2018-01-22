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
        <link href="{!! asset('css/new-style.css') !!}" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>

<!--         <div class="top-bar">
            <div class="container">
              <div class="col-xs-6">
                <img src="{{ URL::to('/images/phgov.png') }}">
                <a href="http://tup.edu.ph/" title="tup.edu.ph">Technological University of the Philippines</a>
              </div>
              <div class="col-xs-6 right-top-link">
                <a href="/home" title="">Home</a>
                <a href="#" title="">Contact</a>
                <a href="#" title="">About</a>
              </div> 
            </div>
        </div>
 -->
        <nav class="navbar navbar-default navbar-index">
          <div class="container">
            <a class="navbar-logo col-xs-6" href="{{ route('home') }}" title="Accreditation Document Management System"><img src="{{ URL::to('/images/logo.png') }}"></a>
            <a class="navbar-brand col-xs-6" href="{{ route('home') }}" title="Accreditation Document Management System">ACCREDITATION<br>DOCUMENT MANAGEMENT<br>SYSTEM</a>
            
          </div>
        </nav>

        <!-- CONTENT -->

        <div class="content">
             <div id="banner" class="col-xs-12">
               <div class="container">
                   <div class="site-title">
                       <h1>ac·cred·i·ta·tion.</h1>
                       <h4><i>(n)</i> the accreditation process ensures that their certification practices are acceptable, typically meaning that they are competent to test and certify third parties, behave ethically and employ suitable quality assurance.</h4>
                   </div>
                   <div class="btn-section col-xs-12">
                    @guest
                    
                       <div class="login-btn-sec col-xs-6">
                           <button class="btn" onclick="window.location='{{('login')}}'" type="submit" title="Login">
                               <a href="#">Login</a>
                           </button>
                       </div>
                       <div class="reg-btn-sec col-sm-6">
                           <button class="btn" onclick="window.location='{{('register')}}'" type="submit" title="Register">
                               <a href="#">Register</a>
                           </button>
                       </div>
                   </div>
                   <div class="col-xs-12">
                    <div class="cos-logo">
                    sadasd
                    </div>
                   </div>
               </div>
             </div>
             @endguest
        </div>
        <!-- END OF CONTENT SECTION -->

        
    </body>
</html>
