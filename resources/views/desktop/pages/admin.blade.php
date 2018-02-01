		
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
            <div class="admin-panel with-nav-tabs admin-default">
                <div class="admin-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Pending User Requests</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Area Chairs</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                 
                        <div class="tab-pane fade in active" id="tab1default">

						
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
						    @if(count($users) > 0)	
						    	@foreach($users as $user)						      	
						      <tr>
						        <td id="user-data">{{ $user->name }}</td>
						        <td id="user-data">{{ $user->created_at }}</td>
						       
						    	   {!! Form::open(['action' => 'AdminController@assign', 'method' => 'POST']) !!}	
						     	<td>
						        	<select class="form-control" id="area_assign" name="area_assign{{ $user->id }}">
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
						        
						        <td id="user-data">

						        	<input type="hidden" name="user_id{{ $user->id }}" value={{ $user->id }}>

						        	{{ Form::submit('Approve', ['class' => 'btn btn-success']) }}
						        	<button class="btn btn-danger">Reject</button>

						        </td>
						        
						 			{!! Form::close() !!}
						      </tr>
						      @endforeach
						    @else
						    <tr><td colspan="4">No pending users.</td></tr>
						    @endif

						    </tbody>

						  </table>

						    <center>{{ $users->links() }}</center>
                        </div>

                        <!-- Area Panel -->
                        <div class="tab-pane fade" id="tab2default">
                        	<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Area No.</th>
						        <th>User Assigned</th>
						        <th>Assigned Area</th>
						        <th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td id="user-data">Area 1</td>
						        <td id="user-data">Damiie Gregorio</td>
						        <td>
						        	<select class="form-control" id="area_assigned">
								        <option>Area 1</option>
								        <option>Area 2</option>
								        <option>Area 3</option>
								        <option>Area 4</option>
								        <option>Area 5</option>
								        <option>Area 6</option>
								        <option>Area 7</option>
								        <option>Area 8</option>
								        <option>Area 9</option>
								        <option>Area 10</option>
								    </select>
						        </td>
						        <td id="user-data">
						        	<a href="">Assign</a>
						        </td>
						      </tr>
						    </tbody>
						  </table>
                        </div>
                    </div>
                </div> <!-- End of Panel Body -->
            </div> <!-- End of Admin Panel -->
		</div> <!-- End of Column -->
	</div> <!-- End of Container -->
@endsection