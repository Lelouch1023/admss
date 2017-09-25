@extends('layouts.app')

@section('content')
<!-- 	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	  Launch demo modal
	</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 -->


<div class="container content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
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
                <label>Select a file</label>
                	{{ Form::file('file') }}
                </div>
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