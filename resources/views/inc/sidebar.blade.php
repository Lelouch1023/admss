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
                    Developer
                </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <div class="profile-userbuttons">
                <button type="button" class="btn btn-success btn-sm">Follow</button>
                <button type="button" class="btn btn-danger btn-sm">Message</button>
            </div>
            <!-- END SIDEBAR BUTTONS -->
            <!-- ACCORDION MENU -->
            <!-- MY AREA  -->
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading  ">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span> My Area </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table sidebar-submenu">
                                <tr>
                                    <td>
                                        <a href="#">A. Statement of Vision, Mission, Goals and Objectives</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">B. Dissemination and Acceptability</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END OF MY AREA -->
                <!-- PENDING AREA -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-flag">
                            </span> Pending Requests</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table sidebar-submenu">
                                <tr>
                                    <td>
                                        <a href="#">Tags</a> <span class="label label-danger">2</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END OF PENDING REQUESTS -->
                <!-- UPLOADED FILES -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-upload">
                            </span> Uploaded Files</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table sidebar-submenu">
                                <tr>
                                    <td>
                                        <a href="{{ ('uploads') }}">Uploads</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Uploads by others.</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END OF UPLOADED FILES -->
                <!-- ALL AREAS -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-folder-open">
                            </span> &nbsp; All Areas</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table sidebar-submenu">
                                <tr>
                                    <td>
                                        <a href="{{ route('area1') }}" title="Area 1">Vision, Mission, Goals and Obejectives</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('area2') }}" title="Area 2">The Faculty</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('area3') }}" title="Area 3">Curriculum and Instruction</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('area4') }}" title="Area 4">Support to Students</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('area5') }}" title="Area 5">Research</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('area6') }}" title="Area 6">Extension and Community Involvement</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('area7') }}" title="Area 7">Library</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('area8') }}" title="Area 8">Physical Plant and Facilities</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('area9') }}" title="Area 9">Laboratories</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('area10') }}" title="Area 10">Administration</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END OF ALL AREAS -->
                <!-- BIN MENU -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-trash">
                            </span> Bin</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table sidebar-submenu">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="{{ ('bin') }}">Sales</a>
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
