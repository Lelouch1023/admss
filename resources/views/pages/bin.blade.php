@extends('layouts.app')

@section('content')
		
<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>Deleted Files</label>
			</div>
			<!-- Category contents -->
			<div class="category-content">
			<!-- PHP code for data loop -->
			@if(count($files) > 0)
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="col-xs-5 category-fname">File Name</th>
							<th class="col-xs-3">Type</th>
							<th class="col-xs-3">Date Deleted</th>
							<th class="col-xs-2">Select</th>
						</tr>
					</thead>
			     @foreach ($files as $file)

					<tr class="file">
						<td class="col-xs-5">
							<img src="{{ URL::to('/images/pdf.png') }}">
							<a href="/uploads/view/{{ $file->id }}">{{$file->name}}</a><br/>sdsd<br/>
							<button type="button" class="bin-restore" data-toggle="modal" data-target="#{{ $file->id }}modal">Restore</button>
							<button type="button" class="bin-delete" data-toggle="modal" data-target="#{{ $file->id }}delete" title="Delete">Delete</button>
			   				<!-- Delete Modal -->
			   				<div class="modal fade" id="{{ $file->id }}delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content delete-modal">
							      <div class="modal-header">
							        <label class="modal-title" id="exampleModalLabel">Delete this file</label>
							      </div>
							      <div class="modal-body delete-modal-content">
							      	<p>Are you sure you want to delete <i><a href="/uploads/view/{{ $file->id }}">{{ $file->name }}</a></i>?</p>
							      	<br />
							      	<p><strong>Note:</strong> Deleted items go to bin.</p>
							      </div>
							      <div class="delete-modal-footer">
							        <button type="button" class="btn btn-secondary no" data-dismiss="modal">No</button>
							        <button type="button" class="btn btn-danger delete" onclick="location.href = '/destroy/{{ $file->id }}';">Delete</button>
							      </div>
							    </div>
							  </div>
							</div>
			   				
						</td>
						<td class="col-xs-3 type">
							<!-- Php code for document type -->
							<p>Memorandum</p>
						</td>
						<td id="user-date" class="col-xs-3">
							<label>{{ Auth::user()->name }}</label>
							<p>{{$file->created_at}}</p>
						</td>
						<td class="col-xs-2 select">
							<label class="form-check-label">
						    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
						 	</label>
						</td>
					</tr>
					@endforeach
           			{{$files->links()}}
           	@else
			      	<center><p>No deleted files.</p></center>
			      
           	@endif
				</table>
			</div>	
		</div>
		
	</div>
</div>



@endsection