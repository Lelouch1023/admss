@extends('layouts.app')

@section('content')
<a href="/post" class="btn btn-default">Back</a>
<h2>{{ $post->title }}</h2>
<img style="width:100%" src="../storage/cover_images/{{$post->cover_image}}">
<br><br>
	<small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
	<h5>{{ $post->body }}</h5>
	<hr>
		@if(!Auth::guest())
			@if(Auth::user()->id == $post->user_id)
				<a href="/post/{{ $post->id }}/edit" class="btn btn-default">Edit</a>
			@endif
		@endif
@endsection