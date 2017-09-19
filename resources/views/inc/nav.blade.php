            <div id="top-bar">
                <div class="container">
                    <img src="{{ URL::to('/images/phgov.png') }}">
                    <a href="http://tup.edu.ph/" title="tup.edu.ph">Technological University of the Philippines</a>
                </div>
<<<<<<< HEAD

                <div class="collapse navbar-collapse" id="app-navbar-collapse"> 
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
=======
            </div>
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
>>>>>>> b7b4281b55d11743fe342d16c539911e47a7174b
                    <ul class="nav navbar-nav">
                        <li class="col-md-6 home-logo"><img src="{{ URL::to('/images/logo.png') }}"></li>
                        @guest
                          <li class="col-md-6 home-login-reg">
                            <button class="login-btn"><a href="{{ route('login') }}">Login</a></button>
                            <button class="reg-btn"><a href="{{ route('register') }}">Register</a></button>
                          </li>
                        @else

                            <li><a href="/post/create" class="btn btn-default">Create Post</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                        
                </div>
            </div>
        </nav>