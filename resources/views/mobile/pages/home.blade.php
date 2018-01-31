		
@extends('layouts.mobile_app')
		
@section('content')
<div class="container">
	<div class="col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>My Files</label>
			</div>
			<!-- Category contents -->
			<div class="category-content">
			<!-- PHP code for data loop -->
			@if(count($files) > 0)
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="category-fname">File Name</th>
							<!-- <th>Type</th> -->
							<th>Type</th>
						</tr>
					</thead>
			     		@foreach ($files as $file)	

					<tr class="file">
						<td>
							<img src="{{ URL::to('/images/pdf.png') }}">
							<a href="/uploads/view/{{ $file->id }}">{{$file->name}}</a>
							<p>
								{{ Auth::user()->name }}
								<br>
								Area #
							</p>
							<!-- <label>{{ Auth::user()->name }}</label>
							<p>{{$file->created_at}}</p> -->
						</td>
						<td class="type">
							<!-- Php code for document type -->
							<label>Memorandum</label>
						</td>
						<!-- <td id="user-date">
							<label>{{ Auth::user()->name }}</label>
							<p>{{$file->created_at}}</p>
						</td> -->
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