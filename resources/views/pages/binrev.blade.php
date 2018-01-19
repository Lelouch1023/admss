@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="col-md-3">
		<div class="sidebar-menu">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="{{ URL::to('/images/user.png') }}" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<label>{{ Auth::user()->name }}</label>
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav side-nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-upload"></i>
							Uploaded files </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Pending Requests</a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-folder-close"></i>
							My Area</a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-folder-open"></i>
							All Areas </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-trash"></i>
							Bin </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
		</div>
	</div>
	</div>
	<div class="col-md-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>My Uploads</label>
			</div>
			<!-- Category contents -->
			<div class="category-content">
				<table class="table table-hover">
					<thead>
						<tr class="category-content">
							<th class="col-xs-8">File Name</th>
							<th class="col-xs-4">Action</th>
						</tr>
					</thead>
					<tr class="file">
						<td class="col-xs-8">
							<img src="{{ URL::to('/images/pdf.png') }}">
							<a href="">TUP_MEMORANDUM.PDF</a>
							<p>Jan. 2, 2018</p>
						</td>
						<td class="col-xs-4 action">
							<button type="button">
			   				  <a href="" target="_blank" title="View"><span class="glyphicon glyphicon-eye-open"></span></a>
			   				</button>
			   				<button type="button">
			   				  <a href="" title="Upload revise"><span class="glyphicon glyphicon-upload"></span></a>
			   				</button>
			   				<button type="button">
			   				  <a href="" title="Download"><span class="glyphicon glyphicon-download"></span></a>
			   				</button>
			   				<button type="button" data-toggle="modal" data-target="#myModal">
			   				  <a href="" title="Scan"><span class="glyphicon glyphicon-qrcode"></span></a>
			   				</button>
			   				<!-- QR Modal -->
			   				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <label class="modal-title" id="exampleModalLabel">Scan QR Code</label>
							      </div>
							      <div class="modal-body">
							      	<center><img src="" alt="Scan code"></center>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
							<!-- End of QR Code Modal -->
			   				<button type="button" data-toggle="modal" data-target="#deleteModal">
			   				  <a href="" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
			   				</button>
			   				<!-- Delete Modal -->
			   				<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <label class="modal-title" id="exampleModalLabel">Delete this file</label>
							      </div>
							      <div class="modal-body">
							      	<p>Are you sure you want to delete <i>this file</i>?</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
							        <button type="button" class="btn btn-danger">Delete</button>
							      </div>
							    </div>
							  </div>
							</div>
							<!-- End of Delete Modal -->
						</td>
					</tr>
				</table>
			</div>	
		</div>
		
	</div>
</div>
@endsection