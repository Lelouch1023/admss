
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
							<a href="/uploads/view/{{ $file->id }}">{{$file->name}}</a>
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