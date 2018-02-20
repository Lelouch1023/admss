@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel create">
		@foreach($files as $file)
            <div class="panel-heading">Upload revision for <i>{{ $file->name }}</i></div>
        
            <div class="panel-body">

        	{!! Form::open(['action' => ['UploadController@update', $file->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group">
           		<label>Select document type</label>
				<!-- Selection for document type -->
				<select class="form-control" id="doctype" name="doctype">
					<option value="Memorandum" @if($file->file_type == "Memorandum") selected @endif >Memorandum</option>
				    <option value="Office Order" @if($file->file_type == "Office Order") selected @endif>Office Orders</option>
				    <option value="TUP Orders" @if($file->file_type == "TUP Orders") selected @endif>TUP Orders</option>
				    <option value="Certificates"  @if($file->file_type == "Certificates") selected @endif>Certicates</option>
					<option value="Researches"  @if($file->file_type == "Researches") selected @endif>Researches</option>
					<option value="Grade Sheets"  @if($file->file_type == "Grade Sheets") selected @endif>Grade Sheets</option>
				</select>
            </div>
            <input type=text name="input">
                <!-- Php code for connection of data -->
				<!--/comment -->
				{{Form::hidden('_method','PUT')}}
				{{ Form::hidden('oldname', $file->name) }}
	        <div class="form-group">
                <label>Select a file</label>
	                  {{ Form::file('file') }}
           </div>
	          {{ Form::submit('Submit', ['class'=>'btn login-btn']) }}
			{!! Form::close() !!}

			<a href="{{ url()->previous() }}"><button class="btn btn-default">Back</button></a>
          	</div>
          @endforeach
        </div>
	</div>
</div>
@endsection