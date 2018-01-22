@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-9 col-xs-12">
		
			<div class="categories">
				<div class="category-title">
					<!-- PHP code for search word -->
					<label>Search results for <i>"{{ $_GET['searchItem'] }}"</i></label>
					<!-- /word -->
				</div>
				<div class="category-content">
					<table class="table table-hover">
						<thead>
							<tr class="category-content">
								<th class="col-xs-8 category-fname">File Name</th>
								<th class="col-xs-4">Action</th>
							</tr>
						</thead>
				<!-- PHP CODE -->
					@if(count($files)>0)
							@foreach($files as $file)
								@if($file->isDeleted == 0)
						<tr class="file">
							<td class="col-xs-8">
								<img src="{{ URL::to('/images/pdf.png') }}">
								<a href="post/{{ $file['id'] }}">{{ $file['name'] }}</a>
								<p>Written on {{ $file['created_at'] }} by {{ $file->user->name }}</p>
							</td>
							<td class="col-xs-4 action">
							<button type="button">
			   				  <a href="" title="Restore file"><span class="glyphicon glyphicon-refresh"></span></a>
			   				</button>
			   				<button type="button" data-toggle="modal" data-target="#deleteModal">
			   				  <a href="" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
			   				</button>
			   				<!-- Delete Modal -->
			   				<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <label class="modal-title" id="exampleModalLabel">Delete this file</label>
							      </div>
							      <div class="modal-body">
							      	<p>Are you sure you want to delete <i>this file</i>?</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
							        <button type="button" class="btn btn-danger">Delete</button>
							      </div>
							    </div>
							  </div>
							</div>
							<!-- End of Delete Modal -->
						</td>
						</tr>
						@endif
					@endforeach	
					</table>
				</div>
			</div>
					
				{{ $files->render() }}
			@else
				<center><h2><p>No result found.</p></h2></center><br><br>
			
			@endif
				</div>
	</div>
@endsection