		
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
						<tr>
							<th class="col-xs-5 category-fname">File Name</th>
							<th class="col-xs-3">Type</th>
							<th class="col-xs-3">Modified</th>
							<th class="col-xs-2">Select</th>
						</tr>
					</thead>
			     		@foreach ($files as $file)	

					<tr class="file">
						<td class="col-xs-5">
							<img src="{{ URL::to('/images/pdf.png') }}">
							<a href="/uploads/view/{{ $file->id }}">{{$file->name}}</a>
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
			      	<center><p>No uploads.</p></center>
			      
           	@endif
				</table>
			</div>	
   			{{$files->links()}}
		</div>
	</div>
</div>
@endsection