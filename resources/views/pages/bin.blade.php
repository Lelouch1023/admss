@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
		  <div class="panel-heading">Deleted Files</div>
		  <div class="panel-body">
		  	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>File Name</th>
			        <th>Date Deleted</th>
			        <th>Actions</th>
			        <th>Select</th>
			      </tr>
			    </thead>
			    <tbody>
			    @if(count($files) >0)
			     @foreach ($files as $file)
			      <tr>
			   		<td>
			   			<button type="button" class="col-md-2 actions-btn btn btn-link">
			   			<span class="actions-btn text">{{$file->name}}</span>
			   			</button>
			   		</td>
			   		<td>{{$file->created_at}}</td>
			   		<td>
			   			<button type="button" class="col-md-3 actions-btn btn btn-link">
			   			<span class="glyphicon glyphicon-transfer"></span>
			   			<span class="actions-btn text"> Restore</span>
			   			</button>
			   		</td>
			   		<td>
			   			<label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
					 	</label>
			   		</td>
			      </tr>
			       @endforeach
           			{{$files->links()}}
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