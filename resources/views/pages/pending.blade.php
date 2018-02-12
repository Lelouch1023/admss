		
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
			     	@foreach($filetags as $filetag)
			     		@if($filetag['filename'] == $file->filename)
					<tr class="file">
						<td class="col-xs-8">
							<img src="{{ URL::to('/images/pdf.png') }}">
							<a href="uploads/view/{{ $file->id }}">{{$file->filename}}</a>
							<p>{{$file->created_at}}</p>
							<p>Tagged to your area by {{ $file->username }} on the parameter
								<strong><a href="{{ URL::to('/').'/'.auth()->user()->area_handled.'/'.$filetag['letter'].'/'.$filetag['parameter'] }}"><!--text-->
								{{ preg_replace('/[^A-Za-z0-9]/', '.', substr($filetag['parameter'], 2, strlen($filetag['parameter'])))}}
								</a></strong>
								<input type="hidden" id = "param_{{ $file->id }}" value="{{$filetag['parameter'] }}">
							</p>
							<button type="button" class="view"><a class="view" href="{{ URL::to('/').'/viewpdf/'.$file->id }}">View</a></button>
							
							<td class="col-xs-4 pending">
								<input type="hidden" id = "file_{{ $file->id }}" value="{{ $file->filename }}">

								<button type="button" class="approve" onclick="approvetag({{ $file->id }})" >
				   				  <span class="glyphicon glyphicon-ok" title="Approve"></span>
				   				</button>
				   				<button type="button" class="ignore" onclick="rejectag({{ $file->id }})">
				   				  <a href="" title="Reject tag"><span  class="glyphicon glyphicon-remove"></span></a>
				   				</button>
							</td>
						</td> 
						
					</tr>
					@endif
				  @endforeach
				@endforeach
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