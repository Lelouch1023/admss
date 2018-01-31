		
@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>My Uploads</label>
			</div>
			<!-- Category contents -->
			
			<div id="file-content">
			<!-- PHP code for data loop -->
				<table class="table table-hover">
					<thead>
						<tr class="category-fname">
							<th class="col-xs-6 ">File Name</th>
							<th class="col-xs-6 ">QR Code</th>
						</tr>
					</thead>
					<tr>
			     	@foreach ($files as $file)	
						<td class="col-xs-6 file">
							<img src="{{ URL::to('/images/pdf-file.png') }}">
							<p><b><h4>{{$file->name}}</h4></b></p>
							<p>November 6, 2018</p>

							@if($file->user_id == Auth::user()->id || Auth::user()->user_lvl == 1)
								<button type="button" class="bin-restore"><a href="/uploads/edit/{{$file->id}}">Revise</a></button>
							@endif

							<button type="button" class="download"><a href="storage/uploads/{{$file->name}}">Download</a></button>
							@if($file->user_id == Auth::user()->id || Auth::user()->user_lvl == 1)
								<button type="button" class="bin-delete" data-toggle="modal" data-target="#{{ $file->id }}delete">Delete</button>
							@endif
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
							        <button type="button" class="btn btn-danger delete" onclick="location.href = '/delete/{{ $file->id }}';">Delete</button>
							      </div>
							    </div>
							  </div>
							</div>
							<!-- End of Delete Modal -->
						</td>
						<td class="col-xs-6 qr-scan">
							<center><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->encoding('UTF-8')->size(250)->generate($file->name)) !!}"></center>
							<!-- <img src="{{ URL::to('/images/pdf-file.png') }}"> -->
						</td>
					</tr>
			@endforeach
          		      
				</table>

			</div>	
		</div>
		
	</div>
</div>
@endsection