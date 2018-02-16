		
@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>Areas</label>
			</div>
			<!-- Category contents -->
			<div class="category-content">
				<div class="tile-menu">
					<button type="button" class="area1-box" onclick="window.location.href='{{ route('area1') }}'">
						<a href="">Area 1</a>
						<p>Vision, Mission, Goals and Obejectives</p>
					</button>
					<button type="button" class="area1-box" onclick="window.location.href='{{ route('area2') }}'">
						<a href="">Area 2</a>
						<p>The Faculty</p>
					</button>
					<button type="button" class="area1-box" onclick="window.location.href='{{ route('area3') }}'">
						<a href="">Area 3</a>
						<p>Curriculum and Instruction</p>
					</button>
					<button type="button" class="area1-box" onclick="window.location.href='{{ route('area4') }}'">
						<a href="">Area 4</a>
						<p>Support to Students</p>
					</button>
					<button type="button" class="area1-box" onclick="window.location.href='{{ route('area5') }}'">
						<a href="">Area 5</a>
						<p>Research</p>
					</button>
					<button type="button" class="area1-box" onclick="window.location.href='{{ route('area6') }}'">
						<a href="">Area 6</a>
						<p>Extension and Community Involvement</p>
					</button>
					<button type="button" class="area1-box" onclick="window.location.href='{{ route('area7') }}'">
						<a href="">Area 7</a>
						<p>Library</p>
					</button>
					<button type="button" class="area1-box" onclick="window.location.href='{{ route('area8') }}'">
						<a href="">Area 8</a>
						<p>Physical Plant and Facilities</p>
					</button>
					<button type="button" class="area1-box" onclick="window.location.href='{{ route('area9') }}'">
						<a href="">Area 9</a>
						<p>Laboratories</p>
					</button>
					<button type="button" class="area1-box" onclick="window.location.href='{{ route('area10') }}'">
						<a href="">Area 10</a>
						<p>Administration</p>
					</button>
				</div>

			</div><!-- End of category content -->
		</div><!-- End of category -->
	</div><!-- End of column -->
</div><!-- End of container -->
@endsection