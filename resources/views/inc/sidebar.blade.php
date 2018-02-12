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
<<<<<<< HEAD
                    <button onclick="window.location.href='{{ ('admin') }}'" type="button" class="btn btn-primary btn-xs">Admin Panel</button>
=======
                    <button onclick="window.location.href='{{ URL::to('/').'/admin' }}'" type="button" class="btn btn-success btn-xs">Admin Panel</button>
>>>>>>> a34554bc0089e0e54f5c2ecd33db0397234b5223
                </div>
            @endif
            <!-- END SIDEBAR BUTTONS -->
            <!-- ACCORDION MENU -->
            
            <div class="panel-group" id="accordion">
                <!-- ALL AREAS -->
                <div class="panel panel-default">
                    <div class="panel-heading home" onclick="window.location.href='{{ ('uploads') }}'">
                        <h4 class="panel-title ">
                           <span class="glyphicon glyphicon-home">
                            </span> &nbsp; Home 
                        </h4>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a onclick="showAllAreas()" data-toggle="collapse" data-parent="#accordion" href="#menu"><span class="glyphicon glyphicon-folder-open">
                            </span> &nbsp; All Areas</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table sidebar-submenu">
                                <tr>
                                    <td >
                                        <a onclick="window.location.href='{{ route('area1') }}'" title="Area 1">Vision, Mission, Goals and Obejectives</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="window.location.href='{{ route('area2') }}'"  title="Area 2">The Faculty</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="window.location.href='{{ route('area3') }}'"  title="Area 3">Curriculum and Instruction</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="window.location.href='{{ route('area4') }}'"  title="Area 4">Support to Students</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="window.location.href='{{ route('area5') }}'"  title="Area 5">Research</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="window.location.href='{{ route('area6') }}'"  title="Area 6">Extension and Community Involvement</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="window.location.href='{{ route('area7') }}'"  title="Area 7">Library</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="window.location.href='{{ route('area8') }}'"  title="Area 8">Physical Plant and Facilities</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="window.location.href='{{ route('area9') }}'"  title="Area 9">Laboratories</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="window.location.href='{{ route('area10') }}'"  title="Area 10">Administration</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END OF ALL AREAS -->
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
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a onclick="showRequest()" data-toggle="collapse" data-parent="#accordion" href="#Pending"><span class="glyphicon glyphicon-flag">
                            </span> Pending Requests</a>
                        </h4>
                    </div>  
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table sidebar-submenu">
                                <tr>
                                    <td>
                                        <a href="{{ ('pending')}}">Tags</a>
                                        <br>
                                        <button type="submit" class="btn see-all" ><a href="">See All</a></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- END OF PENDING REQUESTS -->
                
                <!-- BIN MENU -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a onclick="showBin()" data-toggle="collapse" data-parent="#accordion" href="#bin"><span class="glyphicon glyphicon-trash">
                            </span> Bin</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table sidebar-submenu">
                                <tr>
                                    <td>
                                        <a href="{{ ('bin') }}">Deleted files</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END OF BIN -->
            </div>
        </div>
    </div>

@endguest

