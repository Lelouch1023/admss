
@if(count($errors) > 0)
	@foreach($errors->all() as $error)
			<div class="msg-alert">
				<div class="alert alert-danger">
				{{ $error }}
				</div>	
			</div>

	@endforeach
@endif

@if(session('success'))
		<div class="msg-alert">
			<div class="alert alert-success">
			{{ session('success') }}
			</div>
		</div>
@endif

@if(session('error'))
		<div class="msg-alert">
			<div class="alert alert-danger">
			{{ session('error') }}
			</div>
		</div>
	@endif