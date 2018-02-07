
@if(count($errors) > 0)
<div class="msg-alert" id="msgid">
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
						{{ $error }}<br>
			@endforeach
		</ul>
	</div>	
</div>	
@endif

@if(session('success'))
		<div class="msg-alert" id="msgid">
			<div class="alert alert-success">
			{{ session('success') }}
			</div>
		</div>
@endif

@if(session('error'))
		<div class="msg-alert" id="msgid">
			<div class="alert alert-danger">
			{{ session('error')}}
			</div>
		</div>
	@endif