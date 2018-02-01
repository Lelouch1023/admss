
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

		  	<button type="button" class="keyword pull-right" data-toggle="modal" data-target="#keywordsModal" onclick=""><span class="glyphicon glyphicon-plus" aria-hidden="true" title="Upload a file"></span></button>

            <!-- Modal -->
            <div id="keywordsModal" class="modal fade" role="dialog">
              <div class="modal-dialog upload-modal">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add keywords</h4>
                  </div>
                  <div class="modal-body">
                    
                    
                  <div class="modal-footer">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End of modal -->
		  </div>
		<div class="categories">
			<!-- Category contents -->
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
							<label class="form-check-label">
						    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
						 	</label>
						</td>
					</tr>
					@endforeach

           			
           	@else
           		</table>
			      	<p><center>No files found.</center></p>
			      
           	@endif
				</table>
			</div>
			<!-- /Category content -->

			@if(count($files) > 0)
				{{$files->links()}}
			@endif
		
	</div>
</div>
	

@endsection