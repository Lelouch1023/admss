
@extends('layouts.app')
		
@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">
		  	Tag
		  	
		  </div>
		<div class="categories">
			<!-- Category contents -->
			<div class="category-content"> 
			<!-- PHP code for data loop -->
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="col-xs-5 category-fname">File Name</th>
							<th class="col-xs-3">Type</th>
							<th class="col-xs-3">Modified</th>
							<th class="col-xs-2">Action</th>
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
					<td id="user-date" class="col-xs-3">
						<label>{{ Auth::user()->name }}</label>
						<p>{{$file->created_at}}</p>
					</td>
					<td class="col-xs-2 select">
						<button type="button" class="keyword pull-right" data-toggle="modal" data-target="#thisModal" ><span class="glyphicon glyphicon-plus" aria-hidden="true" title="Add keyword" style="color: #000;"></span></button>
		            <!-- Modal -->
		            <div id="thisModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog">
				    <div class="modal-content keywords">
				     <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			            <center><h4 class="modal-title" id="myModalLabel">Add Tag</h4></center>
						     </div>
				<div class="modal-body">
				<form id="addTag" method="post" class="form-horizontal">
				<div class="form-group">
					<div class="col-xs-12">
						<select class="form-control" id="" name="">
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
					</div>
			    </div>
			    <div class="form-group">
			    	 <div class="col-xs-12 addtag-input">
					     <input type="text" name="countries" class="form-control" value="Vietnam" data-role="tagsinput" />
				     </div>
			    </div>
				</form>
				</div>
				 <div class="modal-footer">
				    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    <input id="" type="submit" class="btn btn-primary" value="Add Tag">
				 </div>
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