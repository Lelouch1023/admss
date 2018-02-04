
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">AREA 9: Laboratories</div>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseA">A. Laboratories, Shops/Facilities</a>
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
								<li><a href="{{ URL::to('/') }}/area9/A/9AS_1">The laboratory layout conforms to acceptable standards (RA 6541 National Building Code of the Philippines/PD 856 "Code of Sanitation of the Philippines") and to particular needs of the Information Technology program.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AS_2">Room lightings conform to the standard requirements of flourescent bukbs relative to the size.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AS_3">The laborities are properly lighted and well ventilated.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AS_4">Each laboratory room has at least two exit doors that open outward.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AS_5">There is a laboratory for shop work for specific technologies.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AS_9">There is a computer laboratory with at least 15 usable computer units and a printer</a></li>
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
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_1">Furniture and equipment arrangement allows free flow of movement and enables students to work comfortably without interference.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_2"> Safety and precautionary measures are implemented.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_3">Usable fire extinguishers are accessible tostaff and students.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_4">Laboratory Operations Manualls for the faculty and students are provided in each laboratory.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_5">Demonstration and training on the use of fire extinguishers, first-aid kit and other emergency measures are periodically conducted.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_6">A well-equipped first-aid kit, charts for antidotes and neutralizing solutions are made available in each laboratory room.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_7">A student's access to a computer is at least 15 hours per term for every subject.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_8">Appropriate laboratories for general education subjects are adequately equipped and well-maintained.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_9">A well-equipped Multimedia Center is maintained.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_10">Gas, water abd electricity are utilized for class practicum activities.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_11">A demonstration table, equipped with sink, water, electrical and gas outlets is availablle and utilized.</a></li>
								<li><a href="{{ URL::to('/') }}/area9/A/9AI_12">Laboratory equipment, supplies and materials are kept in separate stock rooms.</a></li>
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
						      		<li><a href="{{ URL::to('/') }}/area9/A/9AO_1">The laboratories and shops are well-equipped, functional and are conducive to learning.</a></li>
						      	</ol>
							    </td>
							</tr>
		  				</table>
		  			</div>
		  		</div>
		  	</div><!-- END OF PANEL -->
		  	<!-- PARAMETER B -->
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseB">B. Equipment,Supplies and Materials</a>
					</h4>
				</div>
				<div id="collapseB" class="panel-collapse collapse">
					<div class="panel-body parameter-panel">
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
							<li><a href="{{ URL::to('/') }}/area9/B/9BS_1">The equipment, instruments and materials needed in the classrooms are available.</a></li>
							<li><a href="{{ URL::to('/') }}/area9/B/9BS_2">Apparatuses, tools and materials  conform to the specifications required in accordance with the CMO of the program.</a></li>
							<li><a href="{{ URL::to('/') }}/area9/B/9BS_3">Varied computer software are available.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area9/B/9BI_1">Equipment are well-maintained.</a></li>
							<li><a href="{{ URL::to('/') }}/area9/B/9BI_2">Laboratory supplies and materials are wisely utilized.</a></li>
							<li><a href="{{ URL::to('/') }}/area9/B/9BI_3">Licensed computer software are installed and utilized.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area9/B/9BO_1">The laboratory equipment, supplies and materials are sufficient and wisely utilized.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER B -->
		  	<!-- PARAMETER C -->
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseC">C. Maintenance</a>
					</h4>
				</div>
				<div id="collapseC" class="panel-collapse collapse">
					<div class="panel-body parameter-panel">
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
							<li><a href="{{ URL::to('/') }}/area9/C/9CS_1">A laboratory technician/assistant is available for the proper upkeep of the laboratories.</a></li>
							<li data-toggle="collapse" href="#sub-parameter1"><a href="">The institution has a Maintenance and Repair Department/Unit manned by skilled personnel who provides services on direct call.</a></li>
								<ol id="sub-parameter1" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area9/C/9CS_2_1">inventory of equipment and supplies</a></li>
									<li><a href="{{ URL::to('/') }}/area9/C/9CS_2_2">checking on the physicall conditions of equipment and supplies</a></li>
									<li><a href="{{ URL::to('/') }}/area9/C/9CS_2_3">maintenance of the laboratories and shops</a></li>
								</ol>
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
							<li><a href="{{ URL::to('/') }}/area9/C/9CI_1">The institution keeps the laboratories neat, clean and orderly.</a></li>
							<li><a href="{{ URL::to('/') }}/area9/C/9CI_2">Laboratory supplies and materials are regularly replenished/replaced, <i>whenever applicable.</i> </a></li>
							<li><a href="{{ URL::to('/') }}/area9/C/9CI_3">The inventory of laboratory facilities and equipment is systematically and periodically conducted.</a></li>
							<li><a href="{{ URL::to('/') }}/area9/C/9CI_4">The  laboratory equipment and instruments are good condition and periodically calibrated.</a></li>
							<li><a href="{{ URL::to('/') }}/area9/C/9CI_5">All equipment are coded, listed and inventoried.</a></li>
							<li><a href="{{ URL::to('/') }}/area9/C/9CI_6">Waste disposal is efficiently and effectively managed on campus.</a></li>
							<li data-toggle="collapse" href="#sub-parameter2"><a href="">The following are properly maintained by tained staff/technicians: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter2" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area9/C/9CI_7_1">shops</a></li>
									<li><a href="{{ URL::to('/') }}/area9/C/9CI_7_2">computer laboratory</a></li>
									<li><a href="{{ URL::to('/') }}/area9/C/9CI_7_3">multi-media/educational technology center</a></li>
									<li><a href="{{ URL::to('/') }}/area9/C/9CI_7_4">research facility</a></li>
									<li data-toggle="collapse" href="#sub-parameter3"><a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a></li>
										<ol id="sub-parameter3" class="panel-collapse collapse">
											<li><a href="{{ URL::to('/') }}/area9/C/9CI_7_5_1">natural science/physical science</a></li>
											<li><a href="{{ URL::to('/') }}/area9/C/9CI_7_5_2">speech laboratory</a></li>
											<li><a href="{{ URL::to('/') }}/area9/C/9CI_7_5_3">physical education</a></li>
											<li><a href="{{ URL::to('/') }}/area9/C/9CI_7_5_4">others (please specify)</a></li>
										</ol>
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
							<li><a href="{{ URL::to('/') }}/area9/C/9CO_1">The laboratories and shops are functional and are properly maintained.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER C -->
		  	<!-- PARAMETER D -->
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseD">D. Special Provisions</a>
					</h4>
				</div>
				<div id="collapseD" class="panel-collapse collapse">
					<div class="panel-body parameter-panel">
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
							<li><a href="{{ URL::to('/') }}/area9/D/9DS_1">Specific program requirements (listing of materials and equipment as per CMO) are in accordance with guidelines/policies ebodied in official issuances</a></li>
							<li><a href="{{ URL::to('/') }}/area9/D/9DS_2">There is an approved Project Procurement Management Plan (PPMP)</a></li>
							<li><a href="{{ URL::to('/') }}/area9/D/9DS_3">There is an approved Annual Procurement Plan (APP) for lboratory equipment, supplies and materials.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area9/D/9DI_1">The institution implements the special provisions as listed in the CMO.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area9/D/9DO_1">The special provisions in the CMO of the  program are compiled with.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER D -->
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