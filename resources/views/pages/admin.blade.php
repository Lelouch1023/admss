		
@extends('layouts.app')
		
@section('content')
	<div class="container" id="containeradmin">
		<div class="msg-alert alert alert-success" style="display: none; position: fixed; z-index: 999;" id="successmsg">The user has been approved successfully!</div>
		<div class="col-md-9 col-xs-12">
            <div class="admin-panel with-nav-tabs admin-default">
            	<div id="content"  class="admin-heading">
				    <ul id="mytab" class="nav nav-tabs" data-tabs="tabs" >
					    <li class="active" id="reqtab"><a href="#requeststab" data-toggle="tab">Pending Requests</a></li>
					    <li id="chairtab"><a href="#chairstab" data-toggle="tab">Area Chairs</a></li>
					</ul>
				</div>
                <div id="loadsample"></div>
				<div class="panel-body">
				<div id="my-tab-content" class="tab-content">
				    <div class="tab-pane active" id="requeststab">
				        <table class="table table-hover">
						    <thead>
						      <tr>
						        <th>User</th>
						        <th>Date Registered</th>
						        <th>Actions</th>
						      </tr>
						    </thead>
						    <tbody>
						    @if(count($requests) > 0)	
						    	@foreach($requests as $request)						      	
						    		
						      <tr>
						        <td id="user-data">{{ $request->name }} </td>
						        <td id="user-data">{{ $request->created_at }}</td>
						     	
						        <td id="user-data-">

									<input type="hidden" name="_tokenadm" id="tokenadm" value="{{ csrf_token() }}">
						        	<input type="hidden" name="userid" id="userid_{{ $request->id }}" value="{{ $request->id }}">
						        	<center><button type="button" class="btn btn-success" onclick="approve({{ $request->id }})" class="btn btn-link approvebtn" id="acceptbtn_{{ $request->id }}">Approve</button>        	
						        	<button type="button" class="btn btn-danger" onclick="reject({{ $request->id }})" class="btn btn-link" id="rejectbtn_{{ $request->id }}">Reject</button></center>
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
				    <div class="tab-pane" id="chairstab">
				        <table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Areas</th>
						        <th>Assigned User</th>
						        <th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						    @if(count($chairs) > 0)	
						    	@foreach($areas as $area)
						      <tr> {{--area1 => Area 1 --}}
						        <td id="user-data"> 
						        	<p>Area {{ $area->id }}</p>
						        	<input type="hidden" id="area_{{ $area->id }}" name="area_{{ $area->id }}" value="{{ $area->area_id }}">
						        </td> 
						        <!-- If else for admin access -->
						        <td id="user-data">
						        	{{-- @if($chair->user_lvl == 1)
						        	<span class="identify-admin">[admin]</span> 
						        	<br>
						        	@endif --}}
						        <select class="form-control" id="chairs_{{ $area->id }}" name="chairs_{{ $area->id }}">
						        	
						        	@if(count($area->area_handler) != 0)
						        			<option disabled  selected>Select users</option>
						        	@endif
						        
						        @foreach($chairs as $chair)	
						        	@if($chair->area_handled == 0) 
						        		<option value="{{ $chair->id }}"

						        			@if($chair->area_handled == $area->area_id )
						        				 selected

						        			@endif
						        			>{{ $chair->name }}</option>
						        	@endif
						        
						        @endforeach
						    	</select>
						        	{{-- <h6>({{ $chair->email }})</h6></td> --}}
						        <!-- End admin access -->
						        </td>
						        <td id="admin-rights">
						        	<input type="hidden" name="user{{ $chair->id }}" id="user{{ $chair->id }}" value="{{ $chair->id }}">
						        	<button class="btn btn-success" onclick="assign({{ $area->id }})"><a>Assign</a></button>
						        	{{-- @if($chair->user_lvl == 1)
						        		<button class="btn btn-danger" onclick="revokeadmin({{ $chair->id }})"><a>Revoke Admin</a></button>
						        	@else
						        		<button class="btn btn-primary" onclick="giveadmin({{ $chair->id }})"><a>Make Admin</a></button>
						        	@endif

						        	<button class="btn btn-danger" data-toggle="modal" data-target="#del_{{ $chair->id }}delete"><span class="glyphicon glyphicon-trash"></span></button> --}}

						        		<!--del user modal-->
						        	<div class="modal fade" id="del_{{ $chair->id }}delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content delete-modal">
							      <div class="modal-header delete-modal-header">
							        <label class="modal-title" id="exampleModalLabel">Delete User</label>
							      </div>
							      <div class="modal-body delete-modal-content">
							      	<p>Are you sure you want to delete the user <i><a href="#">{{ $chair->name }}</a></i>?</p>
							      	
							      </div>
							      <div class="delete-modal-footer">
							        
							        <button type="button" class="btn btn-danger delete"> <a href = "{{ URL::to('/') }}/deluser/{{ $chair->id }}">Delete</a></button>
							        <button type="button" class="btn btn-secondary no" data-dismiss="modal">Cancel</button>
							      </div>
							    </div>
							  </div>
							</div>
							<!-- End of Delete Modal -->
						        </td>
						      </tr>
						      @endforeach
						    @endif
						    </tbody>
						  </table>
										  @if(count($chairs) > 0)
										  	<center>{{ $chairs->links() }}</center>
										  @endif
				    </div>
				</div>
				</div>
			</div>
        </div> <!-- End of Admin Panel -->
	</div> <!-- End of Column -->
</div> <!-- End of Container -->
@endsection

