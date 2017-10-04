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
			      <tr>
			   		<td><a href="">TUP Memorandum</a></td>
			   		<td>Date</td>
			   		<td>
			   			
			   			<a class="col-md-3" href="">
			   				<span class="glyphicon glyphicon-transfer"></span> Restore
			   			</a>
			   			<a class="col-md-2" href=""><span class="glyphicon glyphicon-trash"></span> Delete</a>
			   			
			   		</td>
			   		<td>
			   			<a href=""><span class="glyphicon glyphicon-unchecked"></span> </a>
			   		</td>
			      </tr>
			    </tbody>
			</table>
		  </div>
		</div>
	</div>
</div>
@endsection