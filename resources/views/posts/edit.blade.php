@extends('layouts.app')

@section('content')


<div class="container content">
    <div class="row">
        <div class="col-md-9 col-xs-12">
            <div class="panel upload-panel">
                <div class="panel-heading">Upload a file</div>
                <div class="panel-body">
                	<h3>{{$files->name}}</h3>
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
		{!! Form::open(['action' => ['UploadController@update', $files->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<!--/comment -->
            
            <div class="form-group">
                <label>Add a tag</label>
                  {{ Form::text('tags', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                <label>Select a file</label>
                  {{ Form::file('file') }}
            </div>
            {{Form::hidden("_method","PUT")}}
	          {{ Form::submit('Submit', ['class'=>'btn login-btn']) }}
				{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>
               






<!-- THIS Is THE OLD FORM FOR UPLOAD -->
	{{-- <h1>create.</h1>
	<h3> --}}
	{{-- {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    	<div class="form-group">
	    	{{ Form::label('title', 'Title') }}
	    	{{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
	    </div>
	    <div class="form-group">
	    	{{ Form::label('body', 'Body') }}
	    	{{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text']) }}
	    </div>
	    <div class="form-group">
	    	{{ Form::file('cover_image') }}
	    </div>
	    {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}
	{!! Form::close() !!}	 --}}
@endsection