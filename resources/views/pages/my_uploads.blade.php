		
@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>My uploads</label>
			</div>
			<!-- Category contents -->
			<div class="category-content">
			@if(count($files) > 0)
			<table class="table table-hover">
				<thead>
				<tr>
					<th class="col-xs-5 category-fname">File Name</th>
					<th class="col-xs-3">Type</th>
					<th class="col-xs-4">Tag/s</th>
				</tr>
				</thead>
				@foreach ($files as $file)
				<tr>
					<td class="col-xs-5 uploads-view">
						<img src="{{ URL::to('/images/pdf-file.png') }}">
						<a href="{{ URL::to('/') }}/uploads/view/{{ $file->id }}">{{$file->name}}</a>
						<p><strong>by {{ Auth::user()->name }}</strong></p>
						<p>{{$file->created_at}}</p>
					</td>
					<td class="col-xs-3 file-type">
						<label>{{ $file->file_type }}</label>
					</td>
					<td class="col-xs-4 file-type">
						<label>PARAMETER B</label>
					</td>
				</tr>
				@endforeach
				@else
					<center><p>No uploads.</p></center>
				@endif
			</table>					
			</div><!-- End of category content -->
			{{ $files->links() }}
		</div><!-- End of category -->
	</div><!-- End of column -->
</div><!-- End of container -->
@endsection