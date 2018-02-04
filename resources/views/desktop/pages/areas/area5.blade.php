
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseA">Parameter A: Priorities and Relevance</a>
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
						    	<li><a href="{{ URL::to('/') }}/area5/A/5AS_1"> The Institution’s research agenda is in consonance with institutional, regional and national priorities concerned such as DOST, CHED-National Higher Education Research Agenda, NEDA, etc.</a></li>
						    	<li><a href="{{ URL::to('/') }}/area5/A/5AS_2">The institution has an approved Research Manual. </a></li>
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
								<li><a href="{{ URL::to('/') }}/area5/A/5AI_1">The approved Research Agenda is implemented </a></li>
								<li data-toggle="collapse" href="#sub-parameter1"><a href="#">The following stakeholders participate in the formulation of research agenda as bases for: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
									<ol id="sub-parameter1" class="panel-collapse collapse">
										<li><a href="{{ URL::to('/') }}/area5/A/5AI_2_1">administrators;</a></li>
										<li><a href="{{ URL::to('/') }}/area5/A/5AI_2_2">faculty;</a></li>
										<li><a href="{{ URL::to('/') }}/area5/A/5AI_2_3">students;</a></li>
										<li><a href="{{ URL::to('/') }}/area5/A/5AI_2_4">government agency representatives (DOST, CHED, NEDA, etc);</a></li>
										<li><a href="{{ URL::to('/') }}/area5/A/5AI_2_5">other stakeholders (alumni, parents, etc.).</a></li>
									</ol>
									<li><a href="{{ URL::to('/') }}/area5/A/5AI_3">Action researches to test theory in practice are conducted by faculty and students.</a></li>
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
						      		<li><a href="{{ URL::to('/') }}/area5/A/5AO_1">Priority researches are identified and conducted.</a></li>
						      		<li><a href="{{ URL::to('/') }}/area5/A/5AO_2">Research results are published.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseB">B. Funding and Other Resources </a>
					</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
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
							<li><a href="{{ URL::to('/') }}/area5/B/5BS_1">The institution has approved and adequate budget for research.</a></li>
							<li data-toggle="collapse" href="#sub-parameter2"><a href="">There are provisions for the following</a></li>
								<ol id="sub-parameter2" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area5/B/5BS_2_1">facilities and equipment such as internet, statistical software and other resources; </a></li>
									<li><a href="{{ URL::to('/') }}/area5/B/5BS_2_2">research staff; </a></li>
									<li><a href="{{ URL::to('/') }}/area5/B/5BS_2_3">supplies and materials;</a></li>
									<li><a href="{{ URL::to('/') }}/area5/B/5BS_2_4">workplace.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area5/B/5BI_1">Allocates adequate funds for the conduct of the faculty and student research.</a></li>
							<li><a href="{{ URL::to('/') }}/area5/B/5BI_2">Establishes linkages with the local/national/international agencies for funding support and assistance.</a></li>
							<li><a href="{{ URL::to('/') }}/area5/B/5BI_3">Maintains a functional and long0rnge program of faculty/staff development to enhance research capability and competence.</a></li>
							<li><a href="{{ URL::to('/') }}/area5/B/5BI_4">Encourages the conduct of externally funded researches. </a></li>
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
							<li><a href="{{ URL::to('/') }}/area5/B/5BO_1">The Research Program is adequately funded. </a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER B	 -->
		  	<!-- PARAMETER C -->
			<div class="panel-group" id="accordion">
		  		<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseC">C. Implementation, Monitoring, Evaluation and Utilization of Research Results/Outputs</a>
					</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
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
							<li><a href="{{ URL::to('/') }}/area5/C/5CS_1">There is a system of implementation, monitoring, evaluation and utilization of research outputs.</a></li>
							<li><a href="{{ URL::to('/') }}/area5/C/5CS_2">There is a policy on Intellectual Property Rights (IPR).</a></li>
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
							<li><a href="{{ URL::to('/') }}/area5/C/5CI_1">The institution/College/Academic Unit has a Research Unit managed by competent staff. </a></li>
							<li><a href="{{ URL::to('/') }}/area5/C/5CI_2">The Research Manual provides guidelines and procedures for the administration and conduct of research. </a></li>
							<li><a href="{{ URL::to('/') }}/area5/C/5CI_3">The faculty conduct applied and operational researches in their fields of specialization in accordance with the thrusts and priorities of the program/institution. </a></li>
							<li><a href="{{ URL::to('/') }}/area5/C/5CI_4">The institution provides incentives to faculty researchers such as honoraria, service credits, de-loading etc. </a></li>
							<li><a href="{{ URL::to('/') }}/area5/C/5CI_5">The College/Academic Unit requires its students to conduct research, as course requirement, (whenever applicable). </a></li>
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
							<li><a href="{{ URL::to('/') }}/area5/C/5CO_1">Implementation, monitoring, evaluation and research utilization of outputs are effective.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER C	 -->
		  	<!-- PARAMETER D -->
			<div class="panel-group" id="accordion">
		  		<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseD">D. Publication and Dissemination </a>
					</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
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
							<li><a href="{{ URL::to('/') }}/area5/D/5DS_1">The institution has an approved and copyrighted Research Journal.</a></li>
							<li data-toggle="collapse" href="#sub-parameter3"><a href="#">The institution has incentives for: </a></li>
								<ol id="sub-parameter3" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area5/D/5DS_2_1">paper presentations;</a></li>
									<li><a href="{{ URL::to('/') }}/area5/D/5DS_2_2">journal publication;</a></li>
									<li><a href="{{ URL::to('/') }}/area5/D/5DS_2_3">outstanding research related performance;</a></li>
									<li><a href="{{ URL::to('/') }}/area5/D/5DS_2_4">patented outputs</a></li>
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
							<li><a href="{{ URL::to('/') }}/area5/D/5DI_1">The institution provides opportunities for the dissemination of research results in fora, conferences, seminars and other related means.</a></li>
							<li><a href="{{ URL::to('/') }}/area5/D/5DI_2">The institution regularly publishes a research journal.</a></li>
							<li><a href="{{ URL::to('/') }}/area5/D/5DI_3">Library exchange of research publications with the other HEI’s and agencies is maintained.</a></li>
							<li><a href="{{ URL::to('/') }}/area5/D/5DI_4">Research manuscripts/technical reports are well-written and edited following the institutional format. </a></li>
							<li data-toggle="collapse" href="#sub-parameter4">The institution supports the researchers in all of the following activities. <a href=""></a></li>
								<ol id="sub-parameter4" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area5/D/5DI_5_1">Instructional Materials Developments;</a></li>
									<li><a href="{{ URL::to('/') }}/area5/D/5DI_5_2">paper presentations, journal publication, classroom lectures and other similar activities;</a></li>
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
							
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
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