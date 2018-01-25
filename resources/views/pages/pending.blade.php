		
@extends('layouts.app')
		
@section('content')
<div class="container">
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
							<a href="">{{$file->name}}</a>
							<p>{{$file->created_at}}</p>
							<td class="col-xs-4 pending">
								<button type="button" class="approve">
				   				  <a href="" title="Approve" ><span class="glyphicon glyphicon-ok"></span></a>
				   				</button>
				   				<button type="button" class="ignore">
				   				  <a href="" title="Remove"><span class="glyphicon glyphicon-remove"></span></a>
				   				</button>
							</td>
						</td>
						
					</tr>
					@endforeach
           	@else
			      	<center><p>No uploads.</p></center>
			      
           	@endif
				</table>
			</div>	
		</div>
           			{{$files->links()}}
		
	</div>
</div>
@endsection