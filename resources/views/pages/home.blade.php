		
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
					<div class="col-xs-4">
						<button type="button" class="area-box box1" onclick="window.location.href='{{ route('area1') }}'">
							<h3>Area 1</h3>
							<p>Vision, Mission, Goals and Obejectives</p>
						</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="area-box box2" onclick="window.location.href='{{ route('area2') }}'">
							<h3>Area 2</h3>
							<p>The Faculty</p>
						</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="area-box box3" onclick="window.location.href='{{ route('area3') }}'">
							<h3>Area 3</h3>
							<p>Curriculum and Instruction</p>
						</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="area-box box4" onclick="window.location.href='{{ route('area4') }}'">
							<h3>Area 4</h3>
							<p>Support to Students</p>
						</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="area-box box5" onclick="window.location.href='{{ route('area5') }}'">
							<h3>Area 5</h3>
							<p>Research</p>
						</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="area-box box6" onclick="window.location.href='{{ route('area6') }}'">
							<h3>Area 6</h3>
							<p>Extension and Community Involvement</p>
						</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="area-box box7" onclick="window.location.href='{{ route('area7') }}'">
							<h3>Area 7</h3>
							<p>Library</p>
						</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="area-box box8" onclick="window.location.href='{{ route('area8') }}'">
							<h3>Area 8</h3>
							<p>Physical Plant and Facilities</p>
						</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="area-box box9" onclick="window.location.href='{{ route('area9') }}'">
							<h3>Area 9</h3>
							<p>Laboratories</p>
						</button>
					</div>
					<div class="col-xs-12">
						<button type="button" class="area-box box10" onclick="window.location.href='{{ route('area10') }}'">
							<h3>Area 10</h3>
							<p>Administration</p>
						</button>
					</div>
					<!-- <button type="button" class="area-box box1" onclick="window.location.href='{{ route('area1') }}'">
						<h3>Area 1</h3>
						<p>Vision, Mission, Goals and Obejectives</p>
					</button>
					<button type="button" class="area-box box2" onclick="window.location.href='{{ route('area2') }}'">
						<h3>Area 2</h3>
						<p>The Faculty</p>
					</button>
					<button type="button" class="area-box box3" onclick="window.location.href='{{ route('area3') }}'">
						<h3>Area 3</h3>
						<p>Curriculum and Instruction</p>
					</button>
					<button type="button" class="area-box box4" onclick="window.location.href='{{ route('area4') }}'">
						<h3>Area 4</h3>
						<p>Support to Students</p>
					</button>
					<button type="button" class="area-box box5" onclick="window.location.href='{{ route('area5') }}'">
						<h3>Area 5</h3>
						<p>Research</p>
					</button>
					<button type="button" class="area-box box6" onclick="window.location.href='{{ route('area6') }}'">
						<h3>Area 6</h3>
						<p>Extension and Community Involvement</p>
					</button>
					<button type="button" class="area-box box7" onclick="window.location.href='{{ route('area7') }}'">
						<h3>Area 7</h3>
						<p>Library</p>
					</button>
					<button type="button" class="area-box box8" onclick="window.location.href='{{ route('area8') }}'">
						<h3>Area 8</h3>
						<p>Physical Plant and Facilities</p>
					</button>
					<button type="button" class="area-box box9" onclick="window.location.href='{{ route('area9') }}'">
						<h3>Area 9</h3>
						<p>Laboratories</p>
					</button>
					<button type="button" class="area-box box10" onclick="window.location.href='{{ route('area10') }}'">
						<h3>Area 10</h3>
						<p>Administration</p>
					</button> -->
				</div>

			</div><!-- End of category content -->
		</div><!-- End of category -->
	</div><!-- End of column -->
</div><!-- End of container -->
@endsection