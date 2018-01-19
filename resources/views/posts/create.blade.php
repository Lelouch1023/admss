@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel upload-panel">
            <div class="panel-heading">Upload a file</div>
            <div class="panel-body">
            <div class="form-group">
           		<label>Select document type</label>
				<!-- Selection for document type -->
				<select class="form-control" id="">
					<option>Memorandum</option>
				    <option>Office Orders</option>
				    <option>TUP Orders</option>
				    <option>Certicates</option>
					<option>Researches</option>
					<option>Grade Sheets</option>
				</select>
            </div>
                <!-- Php code for connection of data -->
				{!! Form::open(['action' => 'UploadController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<!--/comment -->
           	<div class="form-group">
               	<label>Title</label>
                  {{ Form::text('tags', '', ['class' => 'form-control']) }}
           	</div>
           	<div class="form-group">
               	<label>Add a tag</label>
                  {{ Form::text('tags', '', ['class' => 'form-control']) }}
           	</div>
	        <div class="form-group">
                <label>Select a file</label>
	                  {{ Form::file('file') }}
           </div>
	          {{ Form::submit('Submit', ['class'=>'btn login-btn']) }}
			{!! Form::close() !!}
          	</div>
        </div>
	</div>
</div>
@endsection