
<nav class="navbar navbar-default nav-menu navbar-inverse">
  <div class="menu-categories">
  <div class="container">
    <div class="col-md-4 navbar-header">
    <div class="col-xs-12">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#login-nav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ route('home') }}" title="Accreditation Document Management System">ACCREDITATION<br>DOCUMENT MANAGEMENT<br>SYSTEM</a>
    </div>
  </div> 
    <div class="collapse navbar-collapse" id="login-nav">
      @guest
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('register') }}" title="Register">Register</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
      </ul>
    </div>
  </div>
</div>
</nav>
      @else
      <!-- Search bar -->
      <ul class="nav navbar-nav col-sm-5 col-xs-10">
        <div id="custom-search-input">
          <div class="input-group ">
            {!!  Form::open(['route' => 'result', 'method' => 'GET', 'id'=> 'searchForm'])!!}
                    <input type="text" class="search-query form-control" placeholder="Search a file" id="searchItem" name="searchItem"/>
            {{ Form:: close() }}
            <span class="input-group-btn">
            <button class="btn btn-danger" type="button">
              <span class="glyphicon glyphicon-search" style="color: #fff;" aria-hidden="true"></span>
            </button>
            </span>
          </div>
        </div>
      </ul> 
      <!-- End of Search bar -->
      <!-- User Control bar -->
      <ul class="nav navbar-nav navbar-right col-sm-3 col-xs-2">
        <div class="col-xs-12 user-navbar">
          <li class="name-drpdwn">
              
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
              </form>
          </li>
          
          
          @if(auth()->user()->user_lvl == 1)
          <li class="adminpanel"> 
            <a href="{{ route('admin') }}"><button class="btn btn-link nabar-btn">Admin Panel</button></a>
          </li>
          @endif
          </div>
        </ul>
      <!-- End of User Control bar -->
    </div>
    </div>
</div>
</nav>


@endguest
