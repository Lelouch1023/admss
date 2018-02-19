
@extends('layouts.app')
		
@section('content')

<div class="container">
	<div class="msg-alert alert alert-success" style="display: none; position: fixed; z-index: 999;" id="successmsgarch">The file has been unarchived</div>
	<div class="msg-alert alert alert-danger" style="display: none; position: fixed; z-index: 999;" id="errorarch">There are no tags added yet. Please add a tag before removing the file from the archive</div>
	<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">
		  	
		  	Archives
		  </div>
		<div class="categories">
			<!-- Category contents -->
			<div class="category-content"> 
			<!-- PHP code for data loop -->
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="col-xs-4 category-fname">File Name</th>
							<th class="col-xs-3">Type</th>
							<th class="col-xs-5">Action</th>
						</tr>
					</thead>
					<tbody>

			@if(count($files) > 0)
			     		@foreach ($files as $file)	
					<tr class="file">
					<td class="col-xs-5">
						<img src="{{ URL::to('/images/pdf.png') }}">
						<a href="{{ URL::to('/') }}/uploads/view/{{ $file->id }}">{{$file->name}}</a>
					</td>
					<td class="col-xs-3 type">
						<label>{{ $file->file_type }}</label>
					</td>
					
					<td class="col-xs-2 select">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#thisModal_{{ $file->id }}" ><span  aria-hidden="true" title="Add keyword" style="color: #000;">Add Tag</span></button>
						<button type="button" id="unarchive_{{ $file->id }}" onclick = "unarchive({{ $file->id }})" class="btn btn-success" title="Remove the file from archive">Done</button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#thisModal_{{ $file->id }}" ><span  aria-hidden="true" title="Delete file" style="color: #000;">Delete</span></button>
		            <!-- Modal -->
		            <div id="thisModal_{{ $file->id }}" class="modal fade" style="color: #000;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog">
				    <div class="modal-content keywords">
				     <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			            <center><h4 class="modal-title" id="myModalLabel">Add Tag</h4></center>
						     </div>
				
				{{-- <form id="addTag" action = "archive" method="post" class="form-horizontal"> --}}
				{!! Form::open(['action' => 'TagsController@manualtag', 'method' => 'POST']) !!}
				<div class="modal-body">
				<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
				<div class="form-group">
					<div class="col-xs-12">
						<label>Area:</label>
						<select class="form-control" id="areaarch_{{ $file->id }}" onchange="loadd({{ $file->id }})" name="areaarch">
					        <option value="area1" selected>Area 1</option>
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
					</div>
			    {{-- </div>
			    <div class="form-group"> --}}
					<div class="col-xs-12">
						<label>Parameter: </label>
						<select id="paramletarch_{{ $file->id }}" name="paramletarch" disabled class="form-control" onchange="loadsub({{ $file->id }})">
							<option value="A">Select Parameter</option>
						</select>
					</div>
				{{-- </div>
				<div class="form-group"> --}}
					{{--   <div class="form-group">
			    	 <div class="col-xs-12 addtag-input">
					     <input type="text" name="countries" class="form-control" value="Vietnam" data-role="tagsinput" />
				     </div>
			    </div> --}} 
					<div class="col-xs-12">
						<label>Sub Parameter: </label>
						<select id="subparamarch" name="subparamarch" disabled class="form-control">
							<option value="1">Select Sub-parameter</option>
						</select>
					</div>
				</div>
				</div>
			   
				
				
				 <div class="modal-footer">

				 	<input type="hidden" name = "filename" id="filename_{{ $file->id }}" value = "{{ $file->name }}">
				    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

				    {!! Form::submit('Add Tag', ['class'=>'btn btn-primary', 'disabled' => 'disabled', 'id' => 'mantagBtn']) !!}
				 </div>
				 {!! Form::close() !!}
				</div>
				</div>
				</div><!-- End of modal -->

				</td>
				</tr>
				@endforeach
           	@else
           		<tr>
			      	<td colspan="4"><p><center>No files found.</center></p></td>
			    </tr>
			      
           	@endif
           		</tbody>
			</table>
			</div>
			<!-- /Category content -->

			@if(count($files) > 0)
				{{$files->links()}}
			@endif
		
	</div>
</div>
	

@endsection