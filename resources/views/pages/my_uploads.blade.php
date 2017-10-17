
@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
		  <div class="panel-heading">Uploaded Files</div>
		  <div class="panel-body">
		  	<table class="table table-hover">
			    <thead>	
			      <tr>
			        <th>File Name</th>
			        <th>Date Uploaded</th>
			        <th>Actions</th>
			        <th>Select</th>
			      </tr>
			    </thead>
			    <tbody>
			    	@if(count($files) >0)
			     @foreach ($files as $file)
			      <tr >
			   		<td class="actions-btn"><a href="">{{$file->name}}</a></td>
			   		<td>{{$file->created_at}}</td>
			   		<td>
			   			<a href="storage/uploads/{{$file->name}}" download="{{$file->name}}">
			   			<button type="button" class="col-md-2 actions-btn btn btn-link">
			   				<span class="glyphicon glyphicon-download"></span>
			   				<span class="actions-btn text">Download</span>
			   			</button>
			   			</a>
			   			<a href="/uploads/edit/{{$file->id}}">
			   			<button type="button" class="col-md-2 actions-btn btn btn-link">
			   				<span class="glyphicon glyphicon-upload"></span>
			   				<span class="actions-btn text">Revise</span>
			   			</button>
			   			</a>
			   			<a href="/uploads/view/{{ $file->id }}" target="_blank">
				   			<button type="button" class="col-md-2 actions-btn btn btn-link">
				   				<span class="glyphicon glyphicon-eye-open"></span>
				   				<span class="actions-btn text">View</span>
				   			</button>
			   			</a>
			   			{{-- MODAL QR --}}

			   			<button type="button" class="btn btn-link" data-toggle="modal" data-target="#{{$file->id}}">
			   				<span class="glyphicon glyphicon-qrcode" ></span>
			   				<span class="actions-btn text">Scan</span>
			   			</button>
						<div class="modal fade" id="{{$file->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <h5 class="modal-title" id="exampleModalLabel"><center>Scan QR</center></h5>
						      </div>
						      <div class="modal-body">
						        <center><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->encoding('UTF-8')->size(250)->generate($file->name)) !!}"></center>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						      </div>
						    </div>
						  </div>
						</div><!--modal qr-->
						<button type="button" class="col-md-2 actions-btn btn btn-link">
			   				<span class="glyphicon glyphicon-trash"></span>
			   				<span class="actions-btn text">Delete</span>

			   			</button>
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
            		<p>No Uploads</p>
            	@endif
			    </tbody>
			    
			</table>
		  </div>
		</div>
	</div>
</div>
@endsection