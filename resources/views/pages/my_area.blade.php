		
@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>My Uploads</label>
			</div>
			<!-- Category contents -->
			<div class="category-content">
			<!-- PHP code for data loop -->
			@if(count($files) > 0)
				<table class="table table-hover">
					<thead>
						<tr class="category-content">
							<th class="col-xs-8 category-fname">File Name</th>
							<th class="col-xs-4">Action</th>
						</tr>
					</thead>
			     		@foreach ($files as $file)	

					<tr class="file">
						<td class="col-xs-8">
							<img src="{{ URL::to('/images/pdf.png') }}">
							<a href="">{{$file->name}}</a>
							<p>{{$file->created_at}}</p><td class="col-xs-4 action">
							<button type="button">
			   				  <a href="/uploads/view/{{ $file->id }}" target="_blank" title="View"><span class="glyphicon glyphicon-eye-open"></span></a>
			   				</button>
			   				<button type="button">
			   				  <a href="/uploads/edit/{{$file->id}}" title="Upload revise"><span class="glyphicon glyphicon-upload"></span></a>
			   				</button>
			   				<button type="button">
			   				  <a href="storage/uploads/{{$file->name}}" download="{{$file->name}}" title="Download"><span class="glyphicon glyphicon-download"></span></a>
			   				</button>
			   				<button type="button" data-toggle="modal" data-target="#{{$file->id}}" title="Scan">
			   				  <span class="glyphicon glyphicon-qrcode"></span>
			   				</button>
			   				{{-- MODAL QR --}}
			   				<!-- QR Modal -->
			   				<div class="modal fade" id="{{$file->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <h5 class="modal-title" id="exampleModalLabel"><center>Scan QR</center></h5>
						      </div>
						      <div class="modal-body qr-modal">
						       
						        	<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->encoding('UTF-8')->size(250)->generate($file->name)) !!}">
						        	<br>	
						        	<br>	
						        
						      </div>
						    </div>
						  </div>
						</div>
							<!-- End of QR Code Modal -->
			   				<button type="button" data-toggle="modal" data-target="#{{ $file->id }}delete" title="Delete">
			   				  <span class="glyphicon glyphicon-trash"></span>
			   				</button>
			   				<!-- Delete Modal -->
			   				<div class="modal fade" id="{{ $file->id }}delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <label class="modal-title" id="exampleModalLabel">Delete this file</label>
							      </div>
							      <div class="modal-body">
							      	<p>Are you sure you want to delete <strong>{{ $file->name }}</strong>?</p>
							      	<p><strong>Note:</strong> Deleted items go to bin.</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
							        <button type="button" class="btn btn-danger" onclick="location.href = '/delete/{{ $file->id }}';">Delete</button>
							      </div>
							    </div>
							  </div>
							</div>
							<!-- End of Delete Modal -->
						</td>
						</td>
						
					</tr>
					@endforeach
           			{{$files->links()}}
           	@else
			      	<center><p>No uploads.</p></center>
			      
           	@endif
				</table>
			</div>	
		</div>
		
	</div>
</div>
@endsection