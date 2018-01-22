
@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class="col-xs-12">
			<div class="msg-alert">
				<div class="alert alert-danger">
				{{ $error }}
				</div>	
			</div>
		</div>

	@endforeach
@endif

@if(session('success'))
	<div class="col-xs-12">
		<div class="msg-alert">
			<div class="alert alert-success">
			{{ session('success') }}
			</div>
		</div>
	</div>
@endif

@if(session('error'))
	<div class="col-xs-12">
		<div class="msg-alert">
			<div class="alert alert-danger">
			{{ session('error') }}
			</div>
		</div>
	</div>
	@endif