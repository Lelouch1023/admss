        @guest
    <div class="container">
        <div class="row">
            
        </div>        
    </div>

@else

        <div class="col-sm-3 col-md-3">
        <div class="sidebar">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
                <img src="{{ URL::to('/images/user.png') }}" class="img-responsive" alt="">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                    <label>{{ Auth::user()->name }}</label>
                </div>
                <div class="profile-usertitle-job">
               @foreach($area as $areas)
                   {{ $areas->name }}
               @endforeach
               </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            @if(auth()->user()->user_lvl == 1)
              <div class="profile-userbuttons">
                    <button onclick="window.location.href='{{ route('admin') }}'" type="button" class="btn btn-primary btn-xs">Admin Panel</button>
                </div>
            @endif
            <!-- END SIDEBAR BUTTONS -->
            <!-- ACCORDION MENU -->
            
            <div class="panel-group" id="accordion">
                <!-- HOME -->
                <div class="panel panel-default">
                    <div class="panel-heading home" onclick="window.location.href='{{ route('home') }}'">
                        <h4 class="panel-title ">
                           <span class="glyphicon glyphicon-home">
                            </span> &nbsp; Home 
                        </h4>
                    </div>
                </div>
                <!-- END OF HOME -->
                <div class="panel panel-default">
                    <div class="panel-heading home" onclick="window.location.href='{{ route('uploads') }}'">
                        <h4 class="panel-title ">
                           <span class="glyphicon glyphicon-upload">
                            </span> &nbsp; My Uploads 
                        </h4>
                    </div>
                </div>
                <!-- MY AREA  -->
                <div class="panel panel-default">
                    <div class="panel-heading  ">
                        <h4 class="panel-title">
                            <a onclick="showMyArea()" data-toggle="collapse" data-parent="#accordion" href="#myarea"><span class="glyphicon glyphicon-folder-close">
                            </span> 
                                My Area
                             </a>

                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table sidebar-submenu">
                                @foreach($params as $para)
                                    <tr><td><a href="{{ route($arealink) }}">{{ $para->param_name }}</a></td></tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END OF MY AREA -->
                <!-- PENDING AREA -->
                <div class="panel panel-default">
                    <div class="panel-heading" onclick="window.location.href='{{ route('pending') }}'">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#Pending"><span class="glyphicon glyphicon-flag">
                            </span> Pending Requests @if(count($files) > 0)  <span id="pendingCount" class="badge text-right" style="font-size: 12px;" >{{ count($files)}}</span>@endif</a>
                        </h4>
                    </div>  
                </div>
                <!-- END OF PENDING REQUESTS -->
                <!-- BIN MENU -->
                <div class="panel panel-default">
                    <div class="panel-heading" onclick="showBin()" >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#bin"><span class="glyphicon glyphicon-trash">
                            </span> Bin</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                           <center> <table class="table sidebar-submenu">
                                <tr>
                                    <td>
                                        <a onclick="window.location.href='{{ route('bin') }}'">Deleted files</a>
                                    </td>
                                    <td>
                                        <a onclick="window.location.href='{{ route('archive') }}'">Archived files</a>
                                    </td>
                                </tr>
                            </table></center>
                        </div>
                    </div>
                </div>
                <!-- END OF BIN -->
            </div>
        </div>
    </div>

@endguest

