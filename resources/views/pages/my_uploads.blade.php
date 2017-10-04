@extends('layouts.app')		


@section('content')

<div class="container">
	<div class="row">
		<div class="panel panel-default">
		  <div class="panel-heading">Uploaded Files</div>
		  <div class="panel-body">
          @if(count($files)>0)
     		@foreach($files as $file)
		  	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>File Name</th>
			        <th>Date Uploaded</th>
			        <th>Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			   		<td><a href="home/{{ $file->id }}">{{ $file->name }}</a></td>
			   		<td>{{ $file->created_at }}</td>
			   		<td><a href="storage/uploads/{{$file->name}}" download="{{$file->name}}"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-download">Download</i>
                        </button></a></td>
			      </tr>
        		@endforeach
        		{{ $files->links() }}
        		 @else 

		            <p>No Uploads</p>

		    @endif
			    </tbody>
			</table>
		  </div>
		</div>
	</div>
</div>
@endsection
