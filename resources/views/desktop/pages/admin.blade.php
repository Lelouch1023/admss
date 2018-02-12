{{-- 		
@extends('layouts.app')
		
@section('content')
	<div class="container" id="containeradmin">
		<div class="msg-alert alert alert-success" style="display: none;" id="successmsg">The user has been approved successfully!</div>
		<div class="col-md-9 col-xs-12">
            <div class="admin-panel with-nav-tabs admin-default">
                <div class="admin-heading">
                        <ul class="nav nav-tabs mytab" id="mytab" role="tablist">
                            <li class="active"><a href="#requeststab" role="tab" data-toggle="tab">Pending User Requests</a></li>
                            <li><a href="#chairstab" role="tab" data-toggle="tab">Area Chairs</a></li>
                        </ul>
                </div>
                <div id="loadsample"></div>
                <div class="panel-body">
                    <div class="tab-content">
                 
                        <div class="tab-pane fade in active" id="requeststab">
						
						
                        	<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>User</th>
						        <th>Date Registered</th>
						        <th>Assign an Area</th>
						        <th>Actions</th>
						      </tr>
						    </thead>
						    <tbody>
						    @if(count($requests) > 0)	
						    	@foreach($requests as $request)						      	
						    		
						      <tr>
						        <td id="user-data">{{ $request->name }} </td>
						        <td id="user-data">{{ $request->created_at }}</td>
						       
						    	   
						     	<td>
						        	<select class="form-control" id="area_assign{{ $request->id }}" name="area_assign">
								        <option value="area1">Area 1</option>
								        <option value="area2">Area 2</option>
								        <option value="area3">Area 3</option>
								        <option value="area4">Area 4</option>
								        <option value="area5">Area 5</option>
								        <option value="area6">Area 6</option>
								        <option value="area7">Area 7</option>
								        <option value="area8">Area 8</option>
								        <option value="area9">Area 9</option>
								        <option value="area10">Area 10</option>
								    </select>
						        </td>
						        
						        <td id="user-data-">
						        	<input type="hidden" name="userid" id="userid_{{ $request->id }}" value="{{ $request->id }}">
						        	<center><button onclick="approve({{ $request->id }})" class="btn btn-link approvebtn" id="acceptbtn_{{ $request->id }}"><a style="color: #006400;">Approve</a></button>        	
						        	<button onclick = "reject({{ $request->id }})" class="btn btn-link" id="rejectbtn_{{ $request->id }}"><a style="color: #BD2031;">Reject</a></button></center>

						        </td>

						      </tr>
						      @endforeach						    
						    @else
						    <tr><td colspan="4">No pending users.</td></tr>
						    @endif

						    </tbody>

						  </table>
						  @if(count($requests) > 0)
						  	<center>{{ $requests->links() }}</center>
						  @endif
                        </div>

                        <!-- Area Panel -->
                        <div class="tab-pane fade" id="chairstab">
                        	<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Area Handled</th>
						        <th>User Assigned</th>
						        <th>Change Assigned Area</th>
						        <th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						    @if(count($chairs) > 0)	
						    	@foreach($chairs as $chair)
						      <tr> {{--area1 => Area 1 --}}
						        <td id="user-data"> 
						        	@if($chair->user_lvl == 1)
						        		<span style="color: red; ">[admin]</span> 
						        	@endif

						        	{{ strtoupper(substr($chair->area_handled, 0, 1)).substr($chair->area_handled, 1, 3)." ".substr($chair->area_handled, 4) }} </td> 
						        <td id="user-data">{{ $chair->name }} <h6>({{ $chair->email }})</h6></td>
						        <td>
						        	
						        	<select class="form-control" id="area_handled{{ $chair->id }}">

								        <option value="area1" @if($chair->area_handled == "area1") selected @endif>Area 1</option>
								        <option value="area2" @if($chair->area_handled == "area2") selected @endif>Area 2</option>
								        <option value="area3" @if($chair->area_handled == "area3") selected @endif>Area 3</option>
								        <option value="area4" @if($chair->area_handled == "area4") selected @endif>Area 4</option>
								        <option value="area5" @if($chair->area_handled == "area5") selected @endif>Area 5</option>
								        <option value="area6" @if($chair->area_handled == "area6") selected @endif>Area 6</option>
								        <option value="area7" @if($chair->area_handled == "area7") selected @endif>Area 7</option>
								        <option value="area8" @if($chair->area_handled == "area8") selected @endif>Area 8</option>
								        <option value="area9" @if($chair->area_handled == "area9") selected @endif>Area 9</option>
								        <option value="area10" @if($chair->area_handled == "area10") selected @endif>Area 10</option>
								    </select>
						        </td>
						        <td id="user-data">
						        	<input type="hidden" name="user{{ $chair->id }}" id="user{{ $chair->id }}" value="{{ $chair->id }}">
						        	<button class="btn btn-link" onclick="assign({{ $chair->id }})"><a>Assign</a></button>
						        	@if($chair->user_lvl == 1)
						        		<button class="btn btn-link" onclick="revokeadmin({{ $chair->id }})"><a>Revoke Admin Rights</a></button>
						        	@else
						        		<button class="btn btn-link" onclick="giveadmin({{ $chair->id }})"><a>Invoke Admin Rights</a></button>
						        	@endif

						        </td>
						      </tr>
						      @endforeach
						    @else
						      	<p>No area chairs found.</p>
						    @endif
						    </tbody>
						  </table>
						  @if(count($chairs) > 0)
						  	<center>{{ $chairs->links() }}</center>
						  @endif
                        </div>
                    </div>
                </div> <!-- End of Panel Body -->
            </div> <!-- End of Admin Panel -->
		</div> <!-- End of Column -->
	</div> <!-- End of Container -->
@endsection
 --}}