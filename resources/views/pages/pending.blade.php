		
@extends('layouts.app')
		
@section('content')
<div class="container" id="pendingcontainer">
	<div class="msg-alert alert alert-success" style="display: none;" id="pendingsucc">The  file has been tagged on your area successfully!</div>
	<div class="msg-alert alert alert-success" style="display: none;" id="pendingdel">The  file has been tagged on your area successfully!</div>
	<div class="col-sm-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>Pending Requests/Tags</label>
			</div>
			<!-- Category contents -->
			<div class="category-content">
			<!-- PHP code for data loop -->
			@if(count($files) > 0)
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="col-xs-8 category-fname">File Name</th>
							<th class="col-xs-4">Action</th>
						</tr>
					</thead>
			     @foreach ($files as $file)	
			     	
					<tr class="file">
						<td class="col-xs-8">
							<img src="{{ URL::to('/images/pdf.png') }}">
							<a href="uploads/view/{{ $file->id }}">{{$file->filename}}</a>
							<p>{{$file->created_at}}</p>
							<!--Tagger-->
							<p>Tagged to your area by <strong>{{ $file->username }}</strong><br>
							<!--View Btn-->
							<button type="button" class="view"><a class="view" href="{{ URL::to('/').'/viewpdf/'.$file->id }}">View</a></button><br>
							<b>Tags:</b>
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
							
							
							<td class="col-xs-4 pending">
								<input type="hidden" id = "file_{{ $file->id }}" value="{{ $file->filename }}">

								{{-- <button type="button" class="approve" onclick="approvetag({{ $file->id }})" >
				   				  <span class="glyphicon glyphicon-ok" title="Approve"></span>
				   				</button>
				   				<button type="button" class="ignore" onclick="rejectag({{ $file->id }})">
				   				  <a href="" title="Reject tag"><span  class="glyphicon glyphicon-remove"></span></a>
				   				</button> --}}
				   				<button class="btn btn-link" data-toggle="modal" data-target="#actionmodal" ><span  aria-hidden="true" title="Add keyword">Manage</button>
				   				<!--modal for action tags-->
				   				<div id="actionmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				   			
							<div class="modal-dialog">
							    <div class="modal-content keywords">
							        <div class="modal-header">
							            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							            <center><h4 class="modal-title" id="myModalLabel">Tags</h4></center>
							        </div>
							        <div class="modal-body keycontent">
							        <table>
							        	<thead>
											<tr>
												<th class="col-xs-8 category-fname">File Name</th>
												<th class="col-xs-4">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<select>
														@foreach($filetags as $filetag)
			     											@if($filetag['filename'] == $file->filename)
			     											<option> Parameter {{ $filetag['letter']}}  {{ preg_replace('/[^A-Za-z0-9]/', '.', substr($filetag['parameter'], 2, strlen($filetag['parameter'])))}}
								
																</option>
			     											@endif
			     										@endforeach
													</select>
												</td>
												<td></td>
											</tr>
										</tbody>
							        </table>
									</div>
									 <div class="modal-footer">
							                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							                <input id="tag-form-submit" type="submit" class="btn btn-primary" value="Save">
							            </div>
									
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