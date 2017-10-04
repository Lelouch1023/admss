@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'TagsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<!--/comment -->
        <div class="form-group">
        	<label>Select a file</label>
            {{ Form::file('file') }}
        </div>
        <div class="form-group"> 
        	{{ Form::label('tag', 'Add Tag') }}
	    	{{ Form::text('tag', '', ['class' => 'form-control', 'placeholder' => 'Tags']) }}
        	
        </div>
     {{ Form::submit('Submit', ['class'=>'btn login-btn']) }}
{!! Form::close() !!}
@endsection