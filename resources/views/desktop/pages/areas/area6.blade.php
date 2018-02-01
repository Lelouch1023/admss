
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">AREA 6: Extension and Community Involvement</div>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseA">A. Priorities and Relevance</a>
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
						    	<li><a href="{{ URL::to('/') }}/area6/A/6AS_1">The extension agenda is in consonance of local, regional and national development thrusts and priorities.</a></li>
						    	<li><a href="{{ URL::to('/') }}/area6/A/6AS_2">The College/Academic Unit of Information Technology Education has a benchmark survey of the problems, needs priorities and resources of the commnunity.</a></li>
						    	<li><a href="{{ URL::to('/') }}/area6/A/6AS_3">The extension program reflects the VMGO.</a></li>
						    	<li><a href="{{ URL::to('/') }}/area6/A/6AS_4">There is a pool of consultants/experts from various disciplines to serve in extension projects and activities.</a></li>
						    	<li><a href="{{ URL::to('/') }}/area6/A/6AS_5">The institution has an approved and copyrighted Extension Manual.</a></li>
						      	
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
								<li><a href="{{ URL::to('/') }}/area6/A/6AI_1">The extension projects and activites implemented are based on the results of thee benchmark survey.</a></li>
								<li><a href="{{ URL::to('/') }}/area6/A/6AI_2">The extension projects and activities complement the curriculum of the Information Technology Education program under review.</a></li>
								<li><a href="{{ URL::to('/') }}/area6/A/6AI_3">A mutual exchange of resources and services between the College/Academic Unit and the community is evident.</a></li>
								<li><a href="{{ URL::to('/') }}/area6/A/6AI_4">Linakages with local, national, foreign and non-governamental agencies are institutionalized.</a></li>								
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
						      		<li><a href="{{ URL::to('/') }}/area6/A/6AO_1">Priority and relevant extension projects and activities are conducted.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseB">B. Planning, Implementation, Monitoring and Evaluation</a>
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
							<li><a href="{{ URL::to('/') }}/area6/B/6BS_1">There is a distinct that manages the Extension Program.</a></li>
							<li><a href="{{ URL::to('/') }}/area6/B/6BS_2">Instruments for monitoring and evaluation are available.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area6/B/6BI_1">The administration, faculty, students and other stakeholders of the College/Academic Unit of Information Technology Education participate in the planning and  organization of Extension Program.</a></li>
							<li><a href="{{ URL::to('/') }}/area6/B/6BI_2">The administration, faculty and students are involved in the implementation and dissemination of extension programs.</a></li>
							<li><a href="{{ URL::to('/') }}/area6/B/6BI_3">The extension projects and acivities serve varied clientele.</a></li>
							<li><a href="">The conduct of extension projects and activities is sustainable.</a></li>
							<li><a href="{{ URL::to('/') }}/area6/B/6BI_4">Technologies/new knowledge are disseminated to the targer clientele through appropriate extension delivery systems.</a></li>
							<li data-toggle="collapse" href="#sub-parameter1"><a href="">The extension activities are documented in the form of: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
							      	<ol id="sub-parameter1" class="panel-collapse collapse">
										<li><a href="{{ URL::to('/') }}/area6/B/6BI_5_1">pamphlets</a></li>
										<li><a href="{{ URL::to('/') }}/area6/B/6BI_5_2">flyers</a></li>
										<li><a href="{{ URL::to('/') }}/area6/B/6BI_5_3">bulletins</a></li>
										<li><a href="{{ URL::to('/') }}/area6/B/6BI_5_4">newsletters</a></li>
										<li><a href="{{ URL::to('/') }}/area6/B/6BI_5_5">electronic resources</a></li>
								    </ol>
							<li><a href="{{ URL::to('/') }}/area6/B/6BI_6">Periodic monitoring and evaluation of extension projects and activities are conducted.</a></li>
							<li><a href="{{ URL::to('/') }}/area6/B/6BI_7">Results of monitoring and evaluation are disseminated and discussed with concerned stakeholders.</a></li>
							<li><a href="{{ URL::to('/') }}/area6/B/6BI_8">Re-planning of activities based on feedback is conducted.</a></li>
							<li><a href="{{ URL::to('/') }}/area6/B/6BI_9">Accomplishment and terminal reports are filed and submitted on time.</a></li>
							
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
							<li data-toggle="collapse" href="#sub-parameter2"><a href=""></a></li>
								<ol id="sub-parameter2" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area6/B/6BO_1_1">The Extension Program is well-planned, implemented, monitored, evaluated and disseminated.</a></li>
									<li><a href="{{ URL::to('/') }}/area6/B/6BO_1_2">The Extension Program has contributed to the improvement on the quality of life of the target clientele/beneficiaries.</a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
	  		</div>
		  	<!-- End of PARAMETER B	 -->
		  	<!-- PARAMETER C -->
	  		<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseC">C. Funding and Other Resources</a>
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
							<li><a href="{{ URL::to('/') }}/area6/C/6CS_1">There is an approved and adequate budget for extension.</a></li>
							<li data-toggle="collapse" href="#sub-parameter3"><a href="">There is a provision of: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter3" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area6/C/6CS_2_1">facilities and equipment such as internet and other ICT resources</a></li>
									<li><a href="{{ URL::to('/') }}/area6/C/6CS_2_2">extension staff</a></li>
									<li><a href="{{ URL::to('/') }}/area6/C/6CS_2_3">supplies and materials</a></li>
									<li><a href="{{ URL::to('/') }}/area6/C/6CS_2_4">workplace</a></li>
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
							<li><a href="{{ URL::to('/') }}/area6/C/6CI_1">The budget for the extension program is utilized as planned.</a></li>
							<li><a href="{{ URL::to('/') }}/area6/C/6CI_2">Honoraria and other incentives (deloading, credit unit equivalent, etc.) to faculty involved in extension works are granted.</a></li>
							<li data-toggle="collapse" href="#sub-parameter4"><a href="">The College/Academic Unit of Information Technology Education sources out the following from other agencies: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter4" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area6/C/6CI_3_1">additional funding</a></li>
									<li><a href="{{ URL::to('/') }}/area6/C/6CI_3_2">technical assistance and service inputs</a></li>
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
							<li><a href="{{ URL::to('/') }}/area6/C/6CO_1">The Extension Program is adequately funded.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
	  		</div>
		  	<!-- End of PARAMETER C	 -->
		  	<!-- PARAMETER D -->
	  		<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseD">D. Community Involvement and Participation in the Institution's Activities</a>
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
							<li><a href="{{ URL::to('/') }}/area6/D/6D1_1">There is a strategy for involving the communicaty, government and  private agencies in the Extension Program.</a></li>
							
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
							<li data-toggle="collapse" href="#sub-parameter5"><a href="">The College/Academic Unit is committed to the service and development of the community, and <span class=" glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter5" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area6/D/6DI_1_1">initiates and maintains community development projects</a></li>
									<li><a href="{{ URL::to('/') }}/area6/D/6DI_1_2">involves the students, faculty, staff administrators in the projects</a></li>
									<li><a href="{{ URL::to('/') }}/area6/D/6DI_1_3">coordinates its community programs and services with the target clientele.</a></li>
								</ol>
							<li data-toggle="collapse" href="#sub-parameter6"><a href="">There is community participation and involvlement in extension activities in the following: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter6" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area6/D/6DI_2_1">planning</a></li>
									<li><a href="{{ URL::to('/') }}/area6/D/6DI_2_2">implementation and dissemination</a></li>
									<li><a href="{{ URL::to('/') }}/area6/D/6DI_2_3">monitoring and evaluation</a></li>
									<li><a href="{{ URL::to('/') }}/area6/D/6DI_2_4">out-sourcing of funds, materials and other service inputs</a></li>
									<li><a href="{{ URL::to('/') }}/area6/D/6DI_2_5">utilization of technology, knowledge learned, skills acquired from the extension projects and activities.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area6/D/6DO_1">There is wholesome coordinationation between the Extension Program implementers and the target clientele/beneficiaries.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
	  		</div>
		  	<!-- End of PARAMETER D	 -->

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