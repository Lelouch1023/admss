		
@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>Areas</label>
			</div>
			<!-- Category contents -->
			<div class="all-area-content">
				<div class="tile-menu">
					<div class="col-xs-3">
						<button type="button" class="area-box box1" onclick="window.location.href='{{ route('area1') }}'">
							<a href="">Area 1</a>
							<p>Vision, Mission, Goals and Obejectives</p>
						</button>
					</div>
					<div class="col-xs-5">
						<button type="button" class="area-box box2" onclick="window.location.href='{{ route('area2') }}'">
							<a href="">Area 2</a>
							<p>The Faculty</p>
						</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="area-box box3" onclick="window.location.href='{{ route('area3') }}'">
							<a href="">Area 3</a>
							<p>Curriculum and Instruction</p>
						</button>
					</div>
					<div class="col-xs-3">
						<button type="button" class="area-box box4" onclick="window.location.href='{{ route('area4') }}'">
							<a href="">Area 4</a>
							<p>Support to Students</p>
						</button>
					</div>
					<div class="col-xs-2">
						<button type="button" class="area-box box5" onclick="window.location.href='{{ route('area5') }}'">
							<a href="">Area 5</a>
							<p>Research</p>
						</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="area-box box6" onclick="window.location.href='{{ route('area6') }}'">
							<a href="">Area 6</a>
							<p>Extension and Community Involvement</p>
						</button>
					</div>
					<div class="col-xs-6">
						<button type="button" class="area-box box7" onclick="window.location.href='{{ route('area7') }}'">
							<a href="">Area 7</a>
							<p>Library</p>
						</button>
					</div>
					<div class="col-xs-3">
						<button type="button" class="area-box box8" onclick="window.location.href='{{ route('area8') }}'">
							<a href="">Area 8</a>
							<p>Physical Plant and Facilities</p>
						</button>
					</div>
					<div class="col-xs-12">
						<button type="button" class="area-box box9" onclick="window.location.href='{{ route('area9') }}'">
							<a href="">Area 9</a>
							<p>Laboratories</p>
						</button>
					</div>
					<div class="col-xs-12">
						<button type="button" class="area-box box10" onclick="window.location.href='{{ route('area10') }}'">
							<a href="">Area 10</a>
							<p>Administration</p>
						</button>
					</div>
					<!-- <button type="button" class="area-box box1" onclick="window.location.href='{{ route('area1') }}'">
						<a href="">Area 1</a>
						<p>Vision, Mission, Goals and Obejectives</p>
					</button>
					<button type="button" class="area-box box2" onclick="window.location.href='{{ route('area2') }}'">
						<a href="">Area 2</a>
						<p>The Faculty</p>
					</button>
					<button type="button" class="area-box box3" onclick="window.location.href='{{ route('area3') }}'">
						<a href="">Area 3</a>
						<p>Curriculum and Instruction</p>
					</button>
					<button type="button" class="area-box box4" onclick="window.location.href='{{ route('area4') }}'">
						<a href="">Area 4</a>
						<p>Support to Students</p>
					</button>
					<button type="button" class="area-box box5" onclick="window.location.href='{{ route('area5') }}'">
						<a href="">Area 5</a>
						<p>Research</p>
					</button>
					<button type="button" class="area-box box6" onclick="window.location.href='{{ route('area6') }}'">
						<a href="">Area 6</a>
						<p>Extension and Community Involvement</p>
					</button>
					<button type="button" class="area-box box7" onclick="window.location.href='{{ route('area7') }}'">
						<a href="">Area 7</a>
						<p>Library</p>
					</button>
					<button type="button" class="area-box box8" onclick="window.location.href='{{ route('area8') }}'">
						<a href="">Area 8</a>
						<p>Physical Plant and Facilities</p>
					</button>
					<button type="button" class="area-box box9" onclick="window.location.href='{{ route('area9') }}'">
						<a href="">Area 9</a>
						<p>Laboratories</p>
					</button>
					<button type="button" class="area-box box10" onclick="window.location.href='{{ route('area10') }}'">
						<a href="">Area 10</a>
						<p>Administration</p>
					</button> -->
				</div>

			</div><!-- End of category content -->
		</div><!-- End of category -->
	</div><!-- End of column -->
</div><!-- End of container -->
@endsection