
@extends('layouts.app')
		
@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">
		  	
		  	<a href="{{ route($arealink) }}">{{ $areanum  }}</a> /
		  
		  	@foreach($paraname as $para)
		  		<a href="{{ route($arealink) }}">{{ $para->param_name }}</a>
		  	@endforeach /
		  	<a href="#" class="active">{{ $subparam }}</a>
		  	
		  	<button type="button" class="keyword pull-right" data-toggle="modal" data-target="#keywordsModal" ><span  aria-hidden="true" title="Add keyword" style="color: #fff;">See Keywords</span></button>

		  	{{-- <p class="keyword pull-right">Keywords</p> --}}
            <!-- Modal -->
            <div id="keywordsModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			    <div class="modal-content keywords">
			        <div class="modal-header">
			            <button type="button" class="close" onclick="location.reload()" data-dismiss="modal" aria-hidden="true">&times;</button>
			            <center><h4 class="modal-title" id="myModalLabel">Current Keywords</h4></center>
			        </div>
			        {!! Form::open(['action' => 'TagsController@addKeyword', 'method' => 'POST', 'id' => 'bootstrapTagsInputForm']) !!}
			        	{{ csrf_field() }}
			            <div class="modal-body keycontent">
						    <div class="form-group">
						        <label class="control-label">Note: Add words that are related to this area. To add a tag, press "tab" after typing.</label><br><br>
						        <div class="col-xs-12">
						            <input type="text" name="keyword[]" id="keywordinp" class="form-control"
						                   value="@foreach($keywords as $keyword)
						        		{{ $keyword->keyword."," }}
						            @endforeach" data-role="tagsinput" onkeypress ="stoppedTyping()" />
						            <br>
						        </div>
						    </div>
					</div>
					{!! Form::hidden('arealink', $arealink) !!}
					{!! Form::hidden('paramletter', $paramletter) !!}
					{!! Form::hidden('sub', $sub) !!}
					 <div class="modal-footer">
					 	@if($arealink == auth()->user()->area_handled)
			                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			                <input id="keysub" type="submit" class=".sendButton btn btn-primary" value="Save"
			               >
			             @endif
			            </div>
					{!! Form::close() !!}
			    </div>
			</div>
			</div>

           <!-- End of modal -->

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
							<th class="col-xs-2">Select</th>
						</tr>
					</thead>
					<tbody>

			@if(count($files) > 0)
			     		@foreach ($files as $file)	

					<tr class="file">
						<td class="col-xs-5">
							<img src="{{ URL::to('/images/pdf.png') }}">
							<a href="{{ URL::to('/') }}/uploads/view/{{ $file->id }}">{{$file->dispname}}</a>
						</td>
						<td class="col-xs-3 type">
							<label>{{ $file->file_type }}</label>
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