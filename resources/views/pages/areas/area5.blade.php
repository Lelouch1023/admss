
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">AREA 5: Research</div>
		  <div class="panel-body">
		  	<table class="table table-hover">
			    <thead>	
			      <tr>
			        <th>Parameters</th>
			      </tr>
			    </thead>
			    <tbody>
			    <tr>
			   	<td>
		   		<div class="panel-group" id="accordion">
				  <div class="panel panel-default">
				    <div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseA">A. Student Services Program</a>
					</h4>
					</div>
					<div id="collapseA" class="panel-collapse collapse">
					  <div class="panel-body parameter-panel">
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
								<label>Objectives</label>
						    	<li><a href=""> The institution has Student Services Program (SSP).</a></li>
						    	<li><a href="">The Student Affairs Services (SAS) program is consistent with the vision and mission of the Institution, goals of the College/Academic Unit and objectives of the Program. </a></li>
						    	<li><a href="">The objectives of the SAS are clearly defined. </a></li>
						    	<li><a href="">The objectives of the SAS are in accordance with CMO No. 9 series of 2013. <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
						      	<li data-toggle="collapse" href="#sub-parameter1">The SAS is composed of: <a href=""></a></li>
							      	<ol id="sub-parameter1" class="panel-collapse collapse">
										<li><a href="">student welfare program </a></li>
										<li><a href="">student development programs and services.</a></li>
								    </ol>
								<li><a href="">The following basic services are available: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
						      	<li data-toggle="collapse" href="#sub-parameter1">The SAS is composed of: <a href=""></a></li>
							      	<ol id="sub-parameter1" class="panel-collapse collapse">
										<li><a href="">student welfare program </a></li>
										<li><a href="">student development programs and services.</a></li>
								    </ol>
						    </ol>
							</td>
						</tr>
						</tbody>
						<thead>	
						<tr>
							<th data-toggle="collapse" href="#collapse2">Implementation</th>
						</tr>
						</thead>
						<tr>
							<td>
							<ol id="collapse2" class="accrdn">
								<li><a href=""></a></li>
								<li><a href=""></a></li>
						   	</ol>
							</td>
						</tr>
						<!-- OUTCOME -->
						<thead>	
							<tr>
								<th data-toggle="collapse" href="#collapse2">Outcome/s</th>
							</tr>
							</thead>
							<tr>
								<td>
								<ol id="collapse2" class="accrdn">
						      		<li><a href=""></a></li>
						      	</ol>
							    </td>
							</tr>
		  				</table>
		  			</div>
		  		</div>
		  	</div><!-- END OF PANEL -->
		  		  <!-- PARAMETER B -->
			<div class="panel-group" id="accordion">
		  		<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">B.</a>
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
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Implementation</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Outcome/s</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
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
		  	</td>
		  	</tr>
		  	</tbody>
		  	</table>	
		  	</div>
		</div>
	</div>
</div>

@endsection