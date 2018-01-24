
@extends('layouts.app')
		
@section('content')
	<div class="col-md-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>{{ $area[0]->name }}</label>
			</div>
			<!-- Category contents -->
			<div class="category-content">
				<table class="table table-hover">
					<thead>
						<tr class="category-content">
							<th class="col-xs-8">File Name</th>
							<th class="col-xs-4">Action</th>
						</tr>
					</thead>
				@if(count($files) > 0)
					@foreach($files as $file)
					<tr class="file">
						<td class="col-xs-8">
							<img src="{{ URL::to('/images/pdf.png') }}">
							<a href="">{{ $file->name }}</a>
							<p>{{ $file->created_at }}</p>
						</td>
						<td class="col-xs-4 action">
							<button type="button">
			   				  <a href="" target="_blank" title="View"><span class="glyphicon glyphicon-eye-open"></span></a>
			   				</button>
			   				<button type="button">
			   				  <a href="" title="Upload revise"><span class="glyphicon glyphicon-upload"></span></a>
			   				</button>
			   				<button type="button">
			   				  <a href="" title="Download"><span class="glyphicon glyphicon-download"></span></a>
			   				</button>
			   				<button type="button" data-toggle="modal" data-target="#myModal">
			   				  <a href="" title="Scan"><span class="glyphicon glyphicon-qrcode"></span></a>
			   				</button>
			   				<!-- QR Modal -->
			   				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <label class="modal-title" id="exampleModalLabel">Scan QR Code</label>
							      </div>
							      <div class="modal-body">
							      	<center><img src="" alt="Scan code"></center>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
							<!-- End of QR Code Modal -->
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
				@endforeach <!-- end loop for table -->
			@else
			<tr><td>No files.</td></tr>
			@endif
				</table>
			</div>	
		</div>
		
	</div>
@endsection


