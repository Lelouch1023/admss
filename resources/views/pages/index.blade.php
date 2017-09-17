@extends('layouts.app')

@section('content')
<h1>{{ $title }}</h1>
<p>
	@if(count($chars)>0)
		@foreach($chars as $char)
			<ul class="list-group">
				<li class="list-group-item">{{ $char }}</li>
			</ul>
		@endforeach
	@endif
</p>
@endsection