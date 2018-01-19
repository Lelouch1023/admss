
@extends('layouts.app')
		
@section('content')
	<div class="col-md-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>Area 1: Vision, Mission, Goals and Objectives</label>
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
@endsection


<!--<div class="container">
	<div class="row">
		<div class="panel panel-default">

		  <div class="assigned-area-panel-heading">*****INSERT ASSIGNED AREA******</div>

		  <div class="panel-body">
		  	<table class="table table-hover">
			    <thead>	
			      <tr>
			        <th>Sub Areas</th>
			      </tr>
			    </thead>
			    <tbody>
			    <tr>
			   		<td>
			   		<div class="panel-group" id="accordion">
					  <div class="area-panel area-panel-default">
					    <div class="area-panel-heading">
						<h4 class="area-panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">A. Statement of Vision, Mission, Goals and Objectives
							</a>
						</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
						  <div class="panel-body">
		  					<table class="table table-hover">
		  					 <thead>	
							  <tr>
							   <th data-toggle="collapse" href="#collapse2">System — Inputs and Process</th>
							  </tr>
							 </thead>
							 <tbody>
							  <tr>
								<td>
								<ol id="collapse2" class="accrdn">
						      		<li><a href="">The institution has a system of determining its Vision and Mision</a>
						      		</li>
						      		<li><a href="">The Vision clearly reflects what the institution hopes to become in the future</a></li>
						      		<li><a href="">The Mission clearly reflects the institution's legal and other statutory mandates</a></li>
						      		<li><a href="">The Goals of the College/Academic Unit/ are consistent with the Missionof the institution.</a></li>
						      		<li><a href="">The objectives of the program have the expected outcomes in terms of competencies (skills and knowledge), values and other attributes of the graduates which include the development of:</a></li>
						      	</ol>
							    </td>
							  </tr>
							 </tbody>
		  					</table>
		  				</div>
		  			  </div>
		  			 </div>
		  			 <div class="area-panel area-panel-default">
					    <div class="area-panel-heading">
						<h4 class="area-panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">B. Dissemination and Acceptability
							</a>
						</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
						  <div class="area-panel-body">
		  					<table class="table table-hover">
		  					 <thead>	
							  <tr>
							   <th>System — Inputs and Process</th>
							  </tr>
							 </thead>
							 <tbody>
							  <tr>
								<td>
								<ol class="accrdn">
						      		<li data-toggle="collapse" href="#sub-parameter"><a href="">Statement of Vision, Mission, Goals and Objectives</a>
						      		</li>
						      		<ol id="sub-parameter" class="panel-collapse collapse">
						      			<li><a href=""> The institution has a system of determining its Vision and Mission</a></li>
						      			<li>The institution</li>
						      		</ol>
						      		<li data-toggle="collapse" href="#sub-parameter2"><a href=""> Dissemination and Acceptability</a></li>
						      		<ol id="sub-parameter2" class="panel-collapse collapse">
						      			<li>The institution</li>
						      			<li>The institution</li>
						      		</ol>
						      	</ol>
							    </td>
							  </tr>
							 </tbody>
		  					</table>
		  				</div>
		  			  </div>
		  			 </div>	
		  			</div>
		  			</td>
			     </tr>
			    </tbody>
			</table>
		  </div>
		</div>
	</div>
</div> -->
