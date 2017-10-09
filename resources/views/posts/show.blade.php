@extends('layouts.app')

@section('content')
<<<<<<< HEAD
{{-- <a href="/post" class="btn btn-default">Back</a>
<h2>{{ $post->title }}</h2>
<img style="width:100%" src="../storage/cover_images/{{$post->cover_image}}">
<br><br>
	<small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
	<h5>{{ $post->body }}</h5>
	<hr>
		@if(!Auth::guest())
			@if(Auth::user()->id == $post->user_id)
				<a href="/post/{{ $post->id }}/edit" class="btn btn-default">Edit test</a>
			@endif
		@endif --}}


<div class="container">
=======

          
     		

	

 <div class="container">
>>>>>>> 42d2d3a179f0e2a35294f5a5d7dd020dbe4e0ea7
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hello this is dashboard</div>

                <div class="panel-heading">Dashboard 
                  <button class="notification" id="notifclass"></button>
                </div>
                <div class="panel-body">
                   <h3><strong>All files.</strong></h3>
                   <hr>
                   
<<<<<<< HEAD
=======

>>>>>>> 42d2d3a179f0e2a35294f5a5d7dd020dbe4e0ea7
            @if(count($files)>0)
        @foreach($files as $file)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="storage/uploads/{{$file->name}}" download="{{$file->name}}">
                        <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-download">Download</i>
                        </button>
                    </a>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="home/{{ $file->id }}">{{ $file->name }}</a></h3>
                        <small>Uploaded on {{ $file->created_at }} by {{ $file->user->name }}</small> 

<<<<<<< HEAD
                        <h5>{{ $file->body }}</h5>
=======
                        
>>>>>>> 42d2d3a179f0e2a35294f5a5d7dd020dbe4e0ea7
                    </div>
                </div>
                
                
            </div>
        @endforeach
        {{ $files->links() }}
        @else 
            <p>No Uploads</p>

        @endif
<<<<<<< HEAD
                                {{-- </tr>
                            @endforeach
                       </table>
                    @else
                        <h5>No posts to yet. <a href='/post/create' class='btn btn-primary'>Create</a> one!.</h5>
                   @endif    --}}
=======
                                
                    
>>>>>>> 42d2d3a179f0e2a35294f5a5d7dd020dbe4e0ea7
                <button id='notif_butt'>Increment Notificationsssssssssssss</button> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection