
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
      <ul class="nav navbar-nav col-sm-5 col-xs-6">
        <div id="custom-search-input">
          <div class="input-group ">
            {!!  Form::open(['route' => 'result', 'method' => 'GET', 'id'=> 'searchForm'])!!}
                    <input type="text" class="search-query form-control" placeholder="Search" id="searchItem" name="searchItem"/>
            {{ Form:: close() }}
            <span class="input-group-btn">
            <button class="btn btn-danger" type="button">
              <span class="glyphicon glyphicon-search" style="color: #fff;"></span>
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
              <span class="glyphicon glyphicon-off"></span></a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
              </form>
          </li>
          <li class="dropdown notif-drpdwn" id="markasread" onclick="markNotificationAsRead('{{ count(auth()->user()->unreadNotifications)}}')">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-bell" aria-hidden="true" title="Notifications"></span>
              @if( count(auth()->user()->unreadNotifications) !== 0)
            <span id="notifCount" class="badge" style="font-size: 16px;">{{ count(auth()->user()->unreadNotifications)}}</span>
              @endif
            </a>
            <!-- Dropdown menu content -->
            <ul class="dropdown-menu" role="menu">
              <li>
                  @if(count(auth()->user()->unreadNotifications) == 0)
                <i style="color: #000; text-align: center; padding: 5px;">No unread notifications</i>
                @else
                  @foreach(auth()->user()->unreadNotifications as $notification)
                  @include('notif.'.snake_case(class_basename($notification->type)))
                  @endforeach
                @endif
              </li>
            </ul>
          </li><!--notifications-->
          <li class="upload">
            <!-- <a href="/post/create" class="btn upload-btn">
            <span class="glyphicon glyphicon-upload" aria-hidden="true" title="Upload a file"></span>
            </a> -->
            <!-- Trigger the modal with a button -->
            <button type="button" class="upload-btn" data-toggle="modal" data-target="#createModal" onclick=""><span class="glyphicon glyphicon-upload" aria-hidden="true" title="Upload a file"></span></button>

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
                     <div class="form-group">
                        <label>Select document type</label>
                        <!-- Selection for document type -->
                        <select class="form-control" id="">
                          <option>Memorandum</option>
                            <option>Office Orders</option>
                            <option>TUP Orders</option>
                            <option>Certicates</option>
                          <option>Researches</option>
                          <option>Grade Sheets</option>
                        </select>
                    </div>
                    <!-- Php code for connection of data -->
                {!! Form::open(['action' => 'UploadController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <!--/comment -->
                    <div class="form-group">
                        <label>Title</label>
                          {{ Form::text('tags', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        <label>Add a tag</label>
                          {{ Form::text('tags', '', ['class' => 'form-control']) }}
                    </div>
                  <div class="form-group">
                        <label>Select a file</label>
                            {{ Form::file('file') }}
                   </div>
                    {{ Form::submit('Submit', ['class'=>'btn login-btn']) }}
              {!! Form::close() !!}

                  </div>
                  <div class="modal-footer">
                  </div>
                </div>

              </div>
            </div>
          </li>
          </div>
        </ul>
      <!-- End of User Control bar -->
    </div>
    </div>
</div>
</nav>
@endguest
