
@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
		  <div class="panel-heading">Area 1: Vision, Mission, Goals and Objectives</div>
		  <div class="panel-body">
		  	<table class="table table-hover">
			    <thead>	
			      <tr>
			        <th>File Name</th>
			        <th>Uploaded by</th>
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
			   		<td></td>
			   		<td>{{$file->created_at}}</td>
			   		<td>
			   			<a class="col-md-2 actions-btn" href="" download=""><span class="glyphicon glyphicon-download">
			   			</span> Download</a>
			   			<a class="col-md-2" href=""><span class="glyphicon glyphicon-upload"></span> Revise</a>
			   			<a class="col-md-2" href=""><span class="glyphicon glyphicon-eye-open"></span> View</a>
			   			{{-- MODAL QR --}}
			   			<button type="button" class="btn btn-link" data-toggle="modal" data-target="#{{$file->id}}">
			   				<span class="glyphicon glyphicon-qrcode" ></span> Scan
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
						        <center>{{-- {!! QrCode::size(250)->generate($file->name) !!} --}}<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->encoding('UTF-8')->size(250)->generate($file->name)) !!}"></center>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						      </div>
						    </div>
						  </div>
						</div><!--modal qr-->
			   			<a class="col-md-2" href=""><span class="glyphicon glyphicon-trash"></span> Delete</a>
			   			
	
			   		</td>
			   		<td>
			   			Checkbox
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