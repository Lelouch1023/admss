@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-9 col-xs-12">
		
			<div class="categories">
				<div class="category-title">
					<!-- PHP code for search word -->
					<label>Search results for <i>"{{ $_GET['searchItem'] }}"</i></label>
					<!-- /word -->
				</div>
				<div class="category-content">
					@if(count($files)>0)
					<table class="table table-hover">
						<thead>
							<tr>
								<th class="col-xs-5 category-fname">File Name</th>
								<th class="col-xs-3">Type</th>
								<th class="col-xs-3">Modified</th>
								<th class="col-xs-2">Select</th>
							</tr>
						</thead>
				<!-- PHP CODE -->
							@foreach($files as $file)
								@if($file->isDeleted == 0)
						<tr class="file">
							<td class="col-xs-5">
								<img src="{{ URL::to('/images/pdf.png') }}">
								<a href="{{ URL::to('/') }}/uploads/view/{{ $file->id }}">{{ $file['name'] }}</a>
								
							</td>
							<td class="col-xs-3 file-type">
								<label>{{ $file->file_type }}</label>
							</td>
							<td id="user-date" class="col-xs-3">
								<label>{{ Auth::user()->name }}</label>
								<p>{{$file->created_at}}</p>
							</td>
							<td class="col-xs-2">
								<label class="form-check-label"></label>
								<input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</td>
						</tr>
						@endif
					@endforeach	
					</table>
				</div>
			</div>
					
				{{ $files->render() }}
			@else
				<center><h2><p>No result found.</p></h2></center><br><br>
			
			@endif
				</div>
	</div>
@endsection