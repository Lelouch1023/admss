@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel upload-panel">
            <div class="panel-heading">Upload a file</div>
            <div class="panel-body">

        	{!! Form::open(['action' => 'UploadController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group">
           		<label>Select document type</label>
				<!-- Selection for document type -->
				<select class="form-control" id="doctype" name="doctype">
					<option value="Memorandum">Memorandum</option>
				    <option value="Office Order">Office Orders</option>
				    <option value="TUP Orders">TUP Orders</option>
				    <option value="Certificates">Certicates</option>
					<option value="Researches">Researches</option>
					<option value="Grade Sheets">Grade Sheets</option>
				</select>
            </div>
            <input type=text name="input">
                <!-- Php code for connection of data -->
				<!--/comment -->
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