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

        <div class="top-bar">
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

        <nav class="navbar navbar-default navbar-index">
          <div class="container">
              <a class="navbar-logo col-xs-12" href="{{ route('home') }}" title="Accreditation Document Management System"><img src="{{ URL::to('/images/cos.jpg') }}"></a>
          </div>
        </nav>

        <!-- CONTENT -->

        <div class="content">
             <div id="banner" class="col-xs-12">
               <div class="container">
                   <div class="site-title">
                       <h1>Accreditation<br> Document Management <br> System</h1>
                   </div>
                   <div class="btn-section col-xs-12">
                    @guest
                    
                       <div class="login-btn-sec col-xs-6">
                           <button class="btn">
                               <a href="{{ route('login') }}">Login</a>
                           </button>
                       </div>
                       <div class="reg-btn-sec col-sm-6">
                           <button class="btn" >
                               <a href="{{ route('register') }}">Register</a>
                           </button>
                       </div>
                   </div>
                   <div class="col-xs-12">
                    <div class="cos-logo">
                       <img src="{{ URL::to('/images/logo.png') }}">
                    </div>
                   </div>
               </div>
             </div>
             @endguest
        </div>
      <!-- END OF CONTENT SECTION -->

  @include('inc.footer')
      
    </body>
</html>
