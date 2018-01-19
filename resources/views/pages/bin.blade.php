@extends('layouts.app')

@section('content')
<div class="col-md-9 col-xs-12">
	<div class="panel panel-bin">
	  <div class="panel-heading">Deleted Files</div>
		  <div class="panel-body">

		 @if(count($files) >0)
		  	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>File Name</th>
			        <th>Date Deleted</th>
			        <th>Actions</th>
			        <th>Select</th>
			      </tr>
			    </thead>
			    <tbody>
			     @foreach ($files as $file)
			      <tr>
			   		<td>
			   			<button type="button" class="col-md-2 actions-btn btn btn-link">
			   			<span class="actions-btn text">{{$file->name}}</span>
			   			</button>
			   		</td>
			   		<td>{{$file->created_at}}</td>
			   		<td>
			   			<button type="button" class="col-md-3 actions-btn btn btn-link" onclick="location.href='/restore/{{ $file->id }}'">
			   			<span class="glyphicon glyphicon-transfer"></span>
			   			<span class="actions-btn text"> Restore</span>
			   			</button>

			   			<button type="button" class="col-md-2 actions-btn btn btn-link" data-toggle="modal" data-target="#{{ $file->id }}modal">
			   				<span class="glyphicon glyphicon-trash"></span>
			   				<span class="actions-btn text">Delete</span>

			   			</button>
			   			<!--delete modal-->
			   			<div class="modal fade" id="{{ $file->id }}modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <center>Are you sure you want to permanently delete <strong>{{ $file->name }}?</strong></center>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="location.href = '/destroy/{{ $file->id }}';">Delete</button>
						        
						      </div>
						    </div>
						  </div>
						</div>
			   		</td>
			   		<td>
			   			<label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
					 	</label>
			   		</td>
			      </tr>
			       @endforeach
           			{{$files->links()}}
			    @else 
			   		<center><p>No Deleted Files</p></center>
            	@endif
			    </tbody>
			</table>
		  </div>
	</div>
</div>
@endsection