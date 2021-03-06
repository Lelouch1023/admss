
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">AREA 1: Vision, Mission, Goals and Objectives</div>
		  <div class="panel-body">
		  	<table class="table">
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">A. Satement of Vision, Mission, Goals and Objectives <span class="glyphicon glyphicon-triangle-bottom"></span></a>
					</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse ">
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
						    	<li><a href="{{ URL::to('/') }}/area1/A/1AS_1">The institution has a system of determining its Vision and Mission.</a></li>
						      	<li><a href="{{ URL::to('/') }}/area1/A/1AS_2">The Vision clearly reflects what the institution hopes to become in the future</a></li>
						      	<li><a href="{{ URL::to('/') }}/area1/A/1AS_3">The Mission clearly reflects the institution's legal and other statutory mandates</a></li>
						      	<li><a href="{{ URL::to('/') }}/area1/A/1AS_4">The Goals of the College/Academic Unit/ are consistent with the Missionof the institution.</a></li>
						      	<li data-toggle="collapse" href="#sub-parameter2"><a href="">The objectives of the program have the expected outcomes in terms of competencies (skills and knowledge), values and other attributes of the graduates which include the development of: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
							      	<ol id="sub-parameter2" class="panel-collapse collapse">
										<li><a href="{{ URL::to('/') }}/area1/A/1AS_5_1">Technical skills in Information Technology Education</a></li>
										<li><a href="{{ URL::to('/') }}/area1/A/1AS_5_2">Research and extension capabilities</a></li>
										<li><a href="{{ URL::to('/') }}/area1/A/1AS_5_3">Students’ own ideas, desirable attitudes and personal discipline</a></li>
										<li><a href="{{ URL::to('/') }}/area1/A/1AS_5_4">Moral character</a></li>
										<li><a href="{{ URL::to('/') }}/area1/A/1AS_5_5">Critical, analytical, problem solving and other higher order thinking skills</a></li>
										<li><a href="{{ URL::to('/') }}/area1/A/1AS_5_6">Aesthetic and cultural values.</a></li>
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
								<li><a href="{{ URL::to('/') }}/area1/A/1AI_1">The Institution/College conducts review on the statement of the Vision and Mission as Well as its goals and program objectives for the approval of authorities concerned.</a></li>
						      	<li><a href="{{ URL::to('/') }}/area1/A/1AI_2">The College’s/Academic Unit follows a system of formulating its goals and the objectives of the program.</a></li>
						      	<li><a href="{{ URL::to('/') }}/area1/A/1AI_3">The College’s/Academic Unit’s faculty, personnel, students and other stakeholders (cooperating agencies, linkages, alumni, industry sector and other concerned groups) participate in the formulation, review and/or revision of the VMGO.</a></li>
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
						      		<li><a href="{{ URL::to('/') }}/area1/A/1AO_1">The VMGO are crafted and duly approved by the BOR/BOT.program objectives for the approval of authorities concerned.</a></li>
						      	</ol>
							    </td>
							</tr>
		  				</table>
		  			</div>
		  		</div> <!-- End of div.panel -->
		  	</div><!-- END OF PANEL -->
		  		  <!-- PARAMETER B -->
	  		<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">B. Dissemination and Acceptability <span class="glyphicon glyphicon-triangle-bottom"></span></a>
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
							<li><a href="{{ URL::to('/') }}/area1/B/1BS_1">The VMGO are available on bulletin boards, in catalogs/manuals and in other forms of communication media.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area1/B/1BI_1">A system of dissemination and acceptability of the VMGO is enforced.</a></li>
							<li data-toggle="collapse" href="#sub-parameter3"><a href="">The administrators/faculty attend in-service seminars and training on awareness and acceptability of the: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter3" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area1/B/1BI_2_1">Vision and Mission of the Institution</a></li>
									<li><a href="{{ URL::to('/') }}/area1/B/1BI_2_2">Goals of the College/Academic Unit</a></li>
									<li><a href="{{ URL::to('/') }}/area1/B/1BI_2_3">Objectives of the Program.</a></li>
								</ol>
							<li data-toggle="collapse" href="#sub-parameter4"><a href=""> The formulation/review/revision of the VMGO is participated in by the following: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter4" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area1/B/1BI_3_1">Administrators</a></li>
									<li><a href="{{ URL::to('/') }}/area1/B/1BI_3_2">Faculty</a></li>
									<li><a href="{{ URL::to('/') }}/area1/B/1BI_3_3">Staff</a></li>
									<li><a href="{{ URL::to('/') }}/area1/B/1BI_3_4">Students</a></li>
									<li><a href="{{ URL::to('/') }}/area1/B/1BI_3_5">Other stackholders</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area1/B/1BI_4">The faculty and staff perform their jobs/functions in consonance with the VMGO.</a></li>
							<li><a href="{{ URL::to('/') }}/area1/B/1BI_5">The VMGO are widely disseminated to the different agencies, institutions, industry sector and the community.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area1/B/1BO_1">There is full awareness and acceptance of the VMGO by the administrators, faculty, staff, students and other stakeholders.</a></li>
							<li data-toggle="collapse" href="#sub-parameter5"><a href=""> There is congruency between actual educational practices and activities with the following: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter5" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area1/B/1BO_2_1">Vision and mission of the SUC;</a></li>
									<li><a href="{{ URL::to('/') }}/area1/B/1BO_2_2">Goals of the College/Academic Unit;</a></li>
									<li><a href="{{ URL::to('/') }}/area1/B/1BO_2_3">The goals and objectives are being achieved.</a></li>
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
</div>

@endsection