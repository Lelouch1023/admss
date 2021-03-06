		
@extends('layouts.app')
		
@section('content')
<div class="container" id="pendingcontainer">
	<div class="msg-alert alert alert-success" style="display: none;" id="pendingsucc">The  file has been tagged on your area successfully!</div>
	<div class="msg-alert alert alert-success" style="display: none;" id="pendingdel">The  file has been deleted on your area successfully!</div>
	<div class="col-sm-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>Pending Requests/Tags</label>
			</div><div class="msg-alert alert alert-success" style="display: none;" id="pendingsucc">The  file has been tagged on your area successfully!</div>
			<div class="msg-alert alert alert-success" style="display: none;" id="pendingdel">The  file has been deleted on your area successfully!</div>
			<!-- Category contents -->
			<div class="category-content">
			<!-- PHP code for data loop -->
			@if(count($files) > 0)
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="col-xs-6">File Name</th>
							<th class="col-xs-3">Tag/s</th>
							<th class="col-xs-3">Action</th>
						</tr>
					</thead>
			     @foreach ($files as $file)	
			     	
					<tr class="pending-file">
<<<<<<< HEAD
						<td class="col-xs-6">
							<img src="{{ URL::to('/images/pdf-file.png') }}">
							<a href="uploads/view/{{ $file->id }}">{{$file->filename}}</a>
=======
						<td class="col-xs-8">
							<img src="{{ URL::to('/images/pdf.png') }}">
							<a href="uploads/view/{{ $file->id }}">{{$file->dispname}}</a>
>>>>>>> 720276c3c539f8d7ec5304c09deea6023db9c4a6

							<p>{{$file->created_at}}</p>
							<!--Tagger-->
							<p>Tagged to your area by <strong>{{ $file->username }}</strong><br>
							<!--View Btn-->
							
							
						<td class="col-xs-3 file-type">
								@foreach($filetags as $filetag)
			     					@if($filetag['filename'] == $file->filename)
								
								<a href="{{ URL::to('/').'/'.auth()->user()->area_handled.'/'.$filetag['letter'].'/'.$filetag['parameter'] }}"> Parameter {{ $filetag['letter'] }}
									<!--text--> 
								{{ preg_replace('/[^A-Za-z0-9]/', '.', substr($filetag['parameter'], 2, strlen($filetag['parameter'])))}}
								</a>&nbsp
								<input type="hidden" id = "param_{{ $file->id }}" value="{{$filetag['parameter'] }}">
									@endif
				  				@endforeach	
							</p>
						</td>
							<td class="col-xs-3 pending">
								<input type="hidden" id = "file_{{ $file->id }}" value="{{ $file->filename }}">
								{{-- --}}
				   				<button class="btn btn-primary" data-toggle="modal" data-target="#actionmodal_{{ $file->id }}" >Manage</button>
				   				<!--modal for action tags-->
				   				<div id="actionmodal_{{ $file->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				   			
							<div class="modal-dialog">
							    <div class="modal-content keywords">
							        <div class="modal-header">
							            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							            <center><h4 class="modal-title" id="myModalLabel">Tags</h4></center>
							        </div>
					        	<div class="col-xs-12">
							        <div class="modal-body">
					        		<table class="col-xs-12">
							        	<thead>
											<tr>
												<th class="col-xs-6">Tag</th>
												<th class="col-xs-6">Action</th>
											</tr>
										</thead>
										<tbody>                                

											<tr>
												<td>
													<select class="form-control" id="tag_{{ $file->id }}">
														@foreach($filetags as $filetag)
			     											@if($filetag['filename'] == $file->filename)
			     											<option value="{{ $filetag['parameter'] }}"> Parameter {{ $filetag['letter']}}  {{ preg_replace('/[^A-Za-z0-9]/', '.', substr($filetag['parameter'], 2, strlen($filetag['parameter'])))}}
																</option>
			     											@endif
			     										@endforeach
													</select>
												</td>
												<td>									    
												<input type="hidden" id = "file_{{ $file->id }}" value="{{ $file->filename }}">
												<input type="hidden" name="_tokentag" id="tokentag" value="{{ csrf_token() }}">
												<input type="hidden" name="_tokentagdel" id="tokentagdel" value="{{ csrf_token() }}">
													 <button type="button" class="btn btn-success" onclick="approvetag({{ $file->id }})">Approve</button>
									   				<button type="button" class="btn btn-danger" onclick="rejectag({{ $file->id }})">Reject</button>
												</td>
											</tr>
										</tbody>
							        </table>
									</div>
									</div>
									 <div class="modal-footer"></div>
									
							    </div><!--end content-->
							</div><!--end modal-->
							
							</td>
						</td> 
						
					</tr>
					
				@endforeach

				{{ $files->links() }}
           	@else
			      	<center><p>No pending files.</p></center>
			      
           	@endif
				</table>
			</div>	
		</div>
           			{{$files->links()}}
		
	</div>
</div>
@endsection