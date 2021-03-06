
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
      <a class="navbar-brand" href="{{ route('home') }}" title="Accreditation Document Management System">
      ACCREDITATION<br>DOCUMENT MANAGEMENT<br>SYSTEM</a>
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
      <ul class="nav navbar-nav col-sm-5 col-xs-6">
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
      <ul class="nav navbar-nav navbar-right col-sm-3 col-xs-6">
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
          <li class="dropdown notif-drpdwn" id="markasread" onclick="markNotificationAsRead({{ count(auth()->user()->unreadNotifications)}})">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-bell" aria-hidden="true" title="Notifications"></span>
              @if( count(auth()->user()->unreadNotifications) !== 0)
            <span id="notifCount" class="badge" style="font-size: 16px;">{{ count(auth()->user()->unreadNotifications)}}</span>
              @endif
            </a>
            <!-- Dropdown menu content -->
            <ul class="dropdown-menu" role="menu">
              <li><p><center><b>Notifications</b></center></p></li>
              <li class="divider"></li>
              <li>
                  @if(count(auth()->user()->unreadNotifications) == 0)
                <i style="color: #000; text-align: center; padding: 5px;">No unread notifications</i>
                @else
                  @foreach(auth()->user()->unreadNotifications as $notification)
                   
                      @include('notif.'.snake_case(class_basename($notification->type)))
                   
                  @endforeach
                @endif
              </li>
              <li class="divider"></li>
              <center><li><a style="color: #000;" href="{{ URL::to('/') }}/pending">See Pending Requests</a></li></center>
            </ul>
          </li><!--notifications-->
          <!-- Home button -->
          <li class="upload">
            <button type="button" class="upload-btn" onclick="window.location.href='{{ URL::to('/').'/home' }}'"><span class="glyphicon glyphicon-home" aria-hidden="true" title="Home"></span></button>
          </li>
          <!-- End of Home button -->
          <li class="upload">
            <button type="button" class="upload-btn" onclick="window.location.href='{{ URL::to('/').'/upload' }}'"><span class="glyphicon glyphicon-edit" aria-hidden="true" title="Upload"></span></button>
             <!-- <button type="button" class="upload-btn" data-toggle="modal" data-target="#createModal" onclick=""><span class="glyphicon glyphicon-edit" aria-hidden="true" title="Upload a file"></span></button> -->

            <!-- Modal -->
            <div id="createModal" class="modal fade" role="dialog">
              <div class="modal-dialog upload-modal">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload a file</h4>
                  </div>
                  <div class="modal-body">
                    <!-- Php code for connection of data -->
                  {{--  {!! Form::open(['action' => 'UploadController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
                   <form action="{{ URL::to('/') }}/test" method="POST" enctype="multipart/form-data">

                    <!--/comment -->
                
                    <form method="POST" action="#" enctype="multipart/form-data">
                      <!-- COMPONENT START -->
                      <div class="form-group">
                        <label>Select document type</label>
                        <!-- Selection for document type -->

                        <select class="form-control" id="doctype" name="doctype">

                          <option value="Memorandum">Memorandum</option>
                          <option value="Office Order">Office Orders</option>
                          <option value="TUP Orders">TUP Orders</option>
                          <option value="Certificates">Certicates</option>
                          <option value="Researches">Researches</option>
                          <option value="Grade Sheets">Grade Sheets</option>
                        </select>
                    </div>
                      <div class="form-group">
                        <div class="input-group input-file" name="Fichier1">
                          <span class="input-group-btn">
                                <button class="btn btn-default btn-choose" type="button">Choose</button>
                            </span>
                            <input type="text" class="form-control" placeholder='Choose a file...' />
                            <span class="input-group-btn">
                                 <button class="btn btn-warning btn-reset" type="button">Reset</button>
                            </span>
                        </div>
                      </div>
                      <!-- COMPONENT END -->
                        <button id="uploadbtn" onclick="upload()">Upload</button>
                        {{ Form::submit('Submit', ['class'=>'btn btn-primary pull-right']) }}
                        {!! Form::close() !!}
                    </form>
                  <div class="modal-footer">
                  </div>
                </div>
              </div>
            </div>
            </div>
          </li>

        </ul>
      <!-- End of User Control bar -->
    </div>
    </div>
</div>
</nav>

@endguest
