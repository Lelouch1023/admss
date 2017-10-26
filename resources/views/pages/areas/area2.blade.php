
@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
		  <div class="assigned-area-panel-heading">AREA 2: The Faculty</div>
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
					  <div class="panel panel-default">
					    <div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">A. Academic Qualifications and Professional Experience
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
			   		<div class="panel-group" id="accordion">
		  			 <div class="panel panel-default">
					    <div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">B. Recruitment, Selection and Orientation
							</a>
						</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
						  <div class="panel-body">
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
		  			 <div class="panel-group" id="accordion">
		  			 <div class="panel panel-default">
					    <div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">C. Faculty Adequacy and Loading
							</a>
						</h4>
						</div>
						<div id="collapse4" class="panel-collapse collapse">
						  <div class="panel-body">
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
</div>
@endsection