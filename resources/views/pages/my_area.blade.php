@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
		  <div class="panel-heading">Area 1: Vision, Mission, Goals and Objectives</div>
		  <div class="panel-body">
		  	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>File Name</th>
			        <th>Date Uploaded</th>
			        <th>Actions</th>
			        <th>Select</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			   		<td><a href="" class="actions-btn">afaafs</a></td>
			   		<td>Date</td>
			   		<td>
			   			<a class="col-md-2 actions-btn" href="" download=""><span class="glyphicon glyphicon-download">
			   			</span> Download</a>
			   			<a class="col-md-2" href=""><span class="glyphicon glyphicon-upload"></span> Revise</a>
			   			<a class="col-md-2" href=""><span class="glyphicon glyphicon-eye-open"></span> View</a>
			   			<a class="col-md-2" href="">
			   				<span class="glyphicon glyphicon-qrcode"></span> Scan
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