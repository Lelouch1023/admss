
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">AREA 2: Faculty </div>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseA">A.	Academic Qualifications and Professional Experience</a>
					</h4>
					</div>
					<div id="collapseA" class="panel-collapse collapse">
					  <div class="panel-body parameter-panel">
		  				<table class="table">
		  				<thead>	
						<tr>
						   <th data-toggle="collapse" href="#collapse2">System — Inputs and Process</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
							<ol id="collapse2" class="accrdn">
						    
						      	<li data-toggle="collapse" href="#sub-parameter2"><a href="">The required number of faculty (3 full time) possess graduate degrees
						         Appropriate and relevant to the program (CMO 53 s. 2006) and other
						         qualifications namely: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
							      	<ol id="sub-parameter2" class="panel-collapse collapse">
										<li><a href="{{ URL::to('/') }}/area2/A/2AS_1_1">Master in information Technology for 30% of the faculty handling ITE courses</a></li>
										<li data-toggle="collapse" href="#sub-parameter3"><a href="#">BSIT or allied degrees and any of the following: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
										<ol id="sub-parameter3" class="panel-collapse collapse">
											<li><a href="{{ URL::to('/') }}/area2/A/2AS_1_2_1">IT industry experience of 20% of the faculty for 3 years in technical administration, system design, applications programming or equivalent within the last 5 years
											</a></li>
											<li><a href="{{ URL::to('/') }}/area2/A/2AS_1_2_2">proficiency in teaching ITE courses as proven by a certification issued by a certifying body as the Philippine National IT Standards (PhilNITS), Brain bench, Oracle or Microsoft, etc. provided that the teaching load assigned to him/her is aligned with area of certification.</a></li>
										</ol>
								    </ol>
								<li data-toggle="collapse" href="#sub-parameter4"><a href="">Other qualifications such as the following are considered: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
							      	<ol id="sub-parameter4" class="panel-collapse collapse">
							      		<li><a href="{{ URL::to('/') }}/area2/A/2AS_2_1">Related professional experience</a></li>
							      		<li><a href="{{ URL::to('/') }}/area2/A/2AS_2_2">Computer literacy</a></li>
							      		<li><a href="{{ URL::to('/') }}/area2/A/2AS_2_3">Technical/pedagogical skills and competence</a></li>
							      		<li><a href="{{ URL::to('/') }}/area2/A/2AS_2_4">Special abilities</a></li>
							      		<li><a href="{{ URL::to('/') }}/area2/A/2AS_2_5">Research capability</a></li>
									</ol>
						    	<li><a href="{{ URL::to('/') }}/area2/A/2AS_3">Faculty handling OJT/practicum courses have had at least three (3) years of teaching and industry-based experience in the area, if applicable.</a></li>
						    	<li><a href="{{ URL::to('/') }}/area2/A/2AS_4">At least 50% of the faculty are Graduate Degree holders.</a></li>
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
								<li data-toggle="collapse" href="#sub-parameter5"><a href="">The faculty demonstrate professional competence and are engage in any or a combination of the following: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="#sub-parameter5" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area2/A/2AI_1_1">Instruction</a></li>
									<li><a href="{{ URL::to('/') }}/area2/A/2AI_1_2">Research</a></li>
									<li><a href="{{ URL::to('/') }}/area2/A/2AI_1_3">Extension</a></li>
									<li><a href="{{ URL::to('/') }}/area2/A/2AI_1_4">Production</a></li>
									<li><a href="{{ URL::to('/') }}/area2/A/2AI_1_5">Consultancy and expert service</a></li>
									<li><a href="{{ URL::to('/') }}/area2/A/2AI_1_6">Publication, creative and scholarly works</a></li>
								</ol>
								<li><a href="{{ URL::to('/') }}/area2/A/2AI_2">Faculty pursue graduate degrees in Information Technology and/or allied fields from reputable institutions (with at least Level II accreditation status or World/Asian rank).</a></li>
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
						      		<li><a href="{{ URL::to('/') }}/area2/A/2AO_1">The institution has qualified and competent faculty.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseB">B. Recruitment, Selection and Orientation</a>
					</h4>
				</div>
				<div id="collapseB" class="panel-collapse collapse">
					<div class="panel-body parameter-panel">
		  			<table class="table">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href="{{ URL::to('/') }}/area2/B/2BS_1">There is an institutional Human Resource Development Plan/Program (HRDP) designed for faculty recruitment. </a></li>
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
							<li data-toggle="collapse" href="#sub-parameter6"><a href=""> Recruitment and selection of faculty is processed by the Faculty Selection Board using the following criteria: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter6" class="panel-collapse collapse">
									<label>Mandatory</label>
									<li><a href="{{ URL::to('/') }}/area2/B/2BI_1_1">Academic qualifications</a></li>
									<li><a href="{{ URL::to('/') }}/area2/B/2BI_1_2">Personal qualities</a></li>
									<li><a href="{{ URL::to('/') }}/area2/B/2BI_1_3">Communication skills</a></li>
									<li><a href="{{ URL::to('/') }}/area2/B/2BI_1_4">Teaching ability</a></li>
									<li><a href="{{ URL::to('/') }}/area2/B/2BI_1_5">Medical examination result</a></li>
									<label>Optional</label>
									<li><a href="{{ URL::to('/') }}/area2/B/2BI_1_6">relevant professional experiences; (if any)</a></li>
									<li><a href="{{ URL::to('/') }}/area2/B/2BI_1_7">previous record of employment; (if any)</a></li>
									<li><a href="{{ URL::to('/') }}/area2/B/2BI_1_8">technical/special skills and abilities; </a></li>
									<li><a href="{{ URL::to('/') }}/area2/B/2BI_1_9">previous performance rating</a></li>
								</ol>
							<li data-toggle="collapse" href="#sub-parameter7"><a href=""> The hiring system adopts an open competitive selection, based on the
					        CSC-approved Merit System and Promotion Plan of the institution, 
					        published and well-disseminated through various means of 
					        communications: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
					        	<ol id="sub-parameter7" class="panel-collapse collapse">
					        		<li><a href="{{ URL::to('/') }}/area2/B/2BI_2_1">Print media; (newspaper, flyers, CSC Bulleting of Vacant positions)</a></li>
					        		<li><a href="{{ URL::to('/') }}/area2/B/2BI_2_2">Broadcast media (TV, radio)</a></li>
					        		<li><a href="{{ URL::to('/') }}/area2/B/2BI_2_3">Website</a></li>
					        		<li><a href="{{ URL::to('/') }}/area2/B/2BI_2_4">Bulletin boards</a></li>
					        		<li><a href="{{ URL::to('/') }}/area2/B/2BI_2_5">Others (specify)_______</a></li>
					        	</ol>

							<li><a href="{{ URL::to('/') }}/area2/B/2BI_3"> A Screening Committee selects and recommends the best and most qualified applicant.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/B/2BI_4">Measures to avoid professional in-breeding are observed. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/B/2BI_5">The institution conducts orientation for newly-hired faculty on the Institutional vision and mission; CSC, PRC, DBM; and administration policies on their duties, responsibilities, benefits, and other academic concerns.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area2/B/2BO_1">The most qualified faculty are selected. </a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">C. Faculty Adequacy and Loading</a>
					</h4>
				</div>
				<div id="collapse4" class="panel-collapse collapse">
					<div class="panel-body">
		  			<table class="table">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li data-toggle="collapse" href="#sub-parameter8"><a href="">Faculty-student ratio is in accordance with the program requirements and standards as follow:<span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter8" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area2/C/2CS_1_1">Lecture (1:50)</a></li>
									<li><a href="{{ URL::to('/') }}/area2/C/2CS_1_2">Labroty (1:30)</a></li>
								</ol>
				      		<li><a href="{{ URL::to('/') }}/area2/C/2CS_2">There is a provision for incentives of overload teaching in accordance with the CMO of the program and/or institutional guidelines. </a></li>
				      		<li><a href="{{ URL::to('/') }}/area2/C/2CS_3">There are full-time faculty classified by rank, subject/specialization.</a></li>
				      		<li><a href="{{ URL::to('/') }}/area2/C/2CS_4"> Faculty schedule has time for preparation of lessons, scoring test papers, record-keeping, class evaluation and other instruction-related activities. </a></li>
				      		<li><a href="{{ URL::to('/') }}/area2/C/2CS_5">Workload Guidelines contain sufficient time for teaching and/or research, extension production and other assigned tasks. </a></li>
				      		<li><a href="{{ URL::to('/') }}/area2/C/2CS_6">There is equitable, measurable, and fair distribution of teaching load and other assignments.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area2/C/2CI_1">The maximum total load is assigned to regular full-time faculty in accordance to the CMO of the Information Technology Education program and/or institutional guidelines.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/C/2CI_2">A Faculty Manual is published formalizing faculty policies, standards, and guidelines.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/C/2CI_3">Professional subjects are handled by specialists in the discipline/program. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/C/2CI_4">The faculty are assigned to teach their major/minor fields of specialization, for a maximum of four (4) different subjects preparations within a semester.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/C/2CI_5">Administrative arrangements are adopted whenever vacancies/leaves of absence occur during the time.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/C/2CI_6">No less than 60% of the professional subjects in Information Technology Education program are handled by full-time faculty. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/C/2CI_7">Teaching schedule does not allow more than six (6) hours of continuous teaching.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/C/2CI_8">Administrative, research and/or professional assignment outside of the regular teaching is given credits. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/C/2CI_9">Consultation, tutorial, remedial classes, expert services, and other instruction-related activities are given credits in consonance with faculty workload guidelines. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/C/2CI_10">Workload assignments and number of preparations follow existing workload guidelines. </a></li>
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
							<li><a href="{{ URL::to('/') }}/area2/C/2CO_1">The faculty are efficient and effective with sufficient time for instruction research, explanation, extension, production, and other assigned tasks. </a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseD">D. Rank and Tenure</a>
					</h4>
				</div>
				<div id="collapseD" class="panel-collapse collapse">
					<div class="panel-body parameter-panel">
		  			<table class="table">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href="{{ URL::to('/') }}/area2/D/2DS_1">The institution has a system of promotion in rank and tenure based on official issuances</a></li>
							<li><a href="{{ URL::to('/') }}/area2/D/2DS_2">The institution has a policy on probationary status of employment.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/D/2DS_3">At least 50% of the full-time faculty teaching the professional courses are under permanent/regular status. </a></li>
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
							<li><a href="{{ URL::to('/') }}/area2/D/2DI_1">The institution implements the system of the promotion in rank and salary based on existing policies and issuances (e.g. NBC 461).</a></li>
							<li><a href="{{ URL::to('/') }}/area2/D/2DI_2">Retirement, separation or termination benefits are implemented in accordance with institutional and government (CSC, GSIS/DNM) policies and guidelines. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/D/2DI_3">The faculty are officially informed of their rank and tenure after evaluation of the credentials and performance. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/D/2DI_4">The faculty concerned is officially informed of the extension, renewal, or termination of their appointments. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/D/2DI_5">The Institution implements a CSC-approved Strategic Performance Management System (SPMS) which emphasizes quality teaching 
					       performance, research, creative work, extension, and production 
					       services.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/D/2DI_6">The probationary period or temporary status required before the grant of a permanent status to the faculty is in accordance with Civil Service and institutional policies and guidelines.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area2/D/2DO_1">The faculty are satisfied with their rank and employment status.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  		</div>
		  		<!-- End of PARAMETER D -->
		  		<!-- PARAMETER E -->
		  		<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseE">E. Faculty Development</a>
					</h4>
				</div>
				<div id="collapseE" class="panel-collapse collapse">
					<div class="panel-body parameter-panel">
		  			<table class="table">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href="{{ URL::to('/') }}/area2/E/2ES_1">The institution has an approved and sustainable Faculty Development Program (FDP).</a></li>
							<li><a href="{{ URL::to('/') }}/area2/E/2ES_2">There are policies on faculty academic recognition and grant of scholarships/fellowships and awards. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/E/2ES_3">Every faculty member has at least one active membership in professional/scientific organization or honor society relevant to his/her assignment and field of specialization </a></li>
							<li><a href="{{ URL::to('/') }}/area2/E/2ES_4">The budget allocation for faculty development is adequate.</a></li>
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
							<li data-toggle="collapse" href="#sub-parameter9"><a href="">The institution implements a sustainable Faculty Development Program 
					       based on identified properties/needs and in accordance with the CMO
					       of the program as follows. <span class="glyphicon glyphicon-chevron-down"></span>      
							</a></li>
								<ol id="sub-parameter9" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_1_1">Upgraded educational qualification (graduate studies</a></li>
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_1_2">Attendance to seminars, symposia, and conferences for continuing education</a></li>
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_1_3">conduct of research activities and publication of research output</a></li>
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_1_4">giving lectures and presentation of papers in national/international conferences, symposia, and seminars.</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area2/E/2EI_2">The institution supports the professional growth of the faculty through attendance in educational lectures, symposia, seminars, workshops, conferences,a nd other forms of training.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/E/2EI_3">The institution conducts in-service training activities regularly at least once per team</a></li>
							<li><a href="{{ URL::to('/') }}/area2/E/2EI_4">Selection of deserving faculty to be granted scholarships, fellowships, seminars, conferences and/or training grants is done objectively.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/E/2EI_5">The budget for faculty development is adequately allocated. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/E/2EI_6"> The budget for faculty development is wisely utilized.</a></li>
							<li  data-toggle="collapse" href="#sub-parameter10"><a href="">The Faculty Development Program is implemented with the following provisions: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter10" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_7_1">adequate and qualified supervision of faculty;</a></li>
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_7_2">scholarships, fellowships, sabbatical leaves, and travel grants</a></li>
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_7_3">financial support for active membership in professional organizations</a></li>
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_7_4">de-loading to finish the faculty’s thesis/desertion</a></li>
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_7_5">attendance in continuing professional education (CPE) programs such as seminars, workshops, and conferences or some in-service training courses</a></li>
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_7_6">conducting research activities related to the program</a></li>
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_7_7">publishing scholarly articles and research outputs</a></li>
									<li><a href="{{ URL::to('/') }}/area2/E/2EI_7_8">production of instructional materials (IM’s)</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area2/E/2EI_8">Opportunities for the faculty to attend/participate in capability-building and enhancing activities are fairly distributed.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/E/2EI_9">Tuition fee privilege and other forms of assistance are utilized by faculty pursuing advanced (master’s and/or doctoral) degrees. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/E/2EI_10">Faculty are given incentives for book writing, manuals, handbooks, compilations and instructional materials to keep up with new knowledge and techniques in the field of specialization.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area2/E/2EO_1">The faculty are well-trained and competent to serve the institution.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/E/2EO_2">The faculty are committed to serve and support the programs and projects of the institution.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  		</div>
		  		<!-- End of PARAMETER E -->
		  		<!-- PARAMETER F -->
		  		<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseF">F. Professional Performance and Scholarly Works</a>
					</h4>
				</div>
				<div id="collapseF" class="panel-collapse collapse">
					<div class="panel-body parameter-panel">
		  			<table class="table">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li data-toggle="collapse" href="#sub-parameter11" ><a href="">The institution has a system of evaluating the faculty on the following: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter11" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area2/F/2FS_1_1">professional performance</a></li>
									<li><a href="{{ URL::to('/') }}/area2/F/2FS_1_2">scholarly works</a></li>
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
							<label>The Faculty</label>
							<li data-toggle="collapse" href="#sub-parameter12"><a href="">Demonstrate skills and competencies in all of the following: <span class="glyphicon glyphicon-chevron-down"></span>      
							</a></li>
								<ol id="sub-parameter12" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area2/F/2FI_1_1">knowledge of the program objectives/outcome(s)</a></li>
									<li><a href="{{ URL::to('/') }}/area2/F/2FI_1_2">reflecting the program outcomes in the course objectives</a></li>
									<li><a href="{{ URL::to('/') }}/area2/F/2FI_1_3">knowledge/mastery of the content, issues, and methodologies in the discipline</a></li>
									<li><a href="{{ URL::to('/') }}/area2/F/2FI_1_4">proficiency in the use of the language of instruction</a></li>
									<li><a href="{{ URL::to('/') }}/area2/F/2FI_1_5">the use of higher order thinking skills such as analytical, critical, creative and innovative, and problem solving.</a></li>
									<li><a href="{{ URL::to('/') }}/area2/F/2FI_1_6">innovativeness and resourcefulness in the different instructional processes</a></li>
									<li><a href="{{ URL::to('/') }}/area2/F/2FI_1_7">integration of values and work ethics in the teaching-learning process</a></li>
									<li><a href="{{ URL::to('/') }}/area2/F/2FI_1_8">integration of Gender and Development (GAD) activities</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area2/F/2FI_2">promptly submit the required reports and other academic outputs.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/F/2FI_3">update lecture notes through an interface of relevant research findings and new knowledge.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/F/2FI_4">update lecture notes through an interface of relevant research findings and new knowledge. </a></li>
							<li><a href="{{ URL::to('/') }}/area2/F/2FI_5">present papers in local/regional/national ad/or international fora.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/F/2FI_6">publish papers in regional, national, and international magazines, and journals;</a></li>
							<li><a href="{{ URL::to('/') }}/area2/F/2FI_7">conduct research and publish outputs in refereed journals of national and international circulation.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/F/2FI_8">conduct extension and outreach activities.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/F/2FI_9">regularly update respective course syllabi.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/F/2FI_10">utilize ICT and other resources in the enhancement of the teaching learning process.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/F/2FI_11"> produce instructional materials e.g. workbooks, manuals, modules, audio visual aids, etc. to facilitate teaching and learning.</a></li>
							
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
							<li><a href="{{ URL::to('/') }}/area2/F/2FO_1">The faculty performance is generally satisfactory.</a></li>
							<li><a href="{{ URL::to('/') }}/area2/F/2FO_2">The scholarly works of the faculty are commendable. </a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  		</div>
		  		<!-- End of PARAMETER F -->
		  		<!-- PARAMETER G -->
		  		<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseG">G. Salaries, Fringe Benefitss and Incentives</a>
					</h4>
				</div>
				<div id="collapseG" class="panel-collapse collapse">
					<div class="panel-body parameter-panel">
		  			<table class="table">
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
		  		<!-- End of PARAMETER G -->

		  		<!-- PARAMETER H -->
		  		<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseH">H. Professionalism</a>
					</h4>
				</div>
				<div id="collapseH" class="panel-collapse collapse">
					<div class="panel-body parameter-panel">
		  			<table class="table">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href="{{ URL::to('/') }}/area2/H/2HS_1">There are approved SUC Code and SUC Faculty Manual that define the policies, guidelines, rules, and regulations affecting the faculty</a></li>
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
							<label>The Faculty</label>
							<li data-toggle="collapse" href="#sub-parameter12"><a href="">Responsibly observe the following</a></li>
								<ol id="sub-parameter12" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area2/H/2HI_1_1">regular and prompt attendance to classes</a></li>
									<li><a href="{{ URL::to('/') }}/area2/H/2HI_1_2">participation in facul{{ URL::to('/') }}/area2/H/2HI_1_2ty meetings and university</a></li>
									<li><a href="{{ URL::to('/') }}/area2/H/2HI_1_3">completion of assigned tasks on time</a></li>
									<li><a href="{{ URL::to('/') }}/area2/H/2HI_1_4">submission of all required reports promptly</a></li>
									<li><a href="{{ URL::to('/') }}/area2/H/2HI_1_5">decorum at all times.</a></li>
								</ol>
				      		<li><a href="{{ URL::to('/') }}/area2/H/2HI_2"> follow the Code of Ethics of the Profession and the Code of Ethical Standards for Government Officials and Employees (RA 6713).</a></li>
				      		<li><a href="{{ URL::to('/') }}/area2/H/2HI_3">exercise academic freedom judiciously.</a></li>
				      		<li data-toggle="collapse" href="#sub-parameter13"><a href=""> show commitment and loyalty to the institution as evidenced by: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
				      			<ol id="sub-parameter13" class="panel-collapse collapse">
				      				<li><a href="{{ URL::to('/') }}/area2/H/2HI_4_1">observance of official time</a></li>
				      				<li><a href="{{ URL::to('/') }}/area2/H/2HI_4_2">productive use of official time</a></li>
				      				<li><a href="{{ URL::to('/') }}/area2/H/2HI_4_3">performance of tasks and assignments, with or without compensation</a></li>
				      				<li><a href="{{ URL::to('/') }}/area2/H/2HI_4_4">compliance with terms of agreement/contracts (e.g., scholarship and training).</a></li>
				      			</ol>
				      		<li><a href="{{ URL::to('/') }}/area2/H/2HI_5">maintain harmonious interpersonal relations with superiors, peers, students, parents, and the community.</a></li>
				      		<li><a href="{{ URL::to('/') }}/area2/H/2HI_6">demonstrate knowledge of recent educational trends/issues/resources in the field of Information Technology Education.</a></li>
				      		<li><a href="{{ URL::to('/') }}/area2/H/2HI_7">show evidence of professional growth through further and continuing studies.</a></li>
				      		<li><a href="{{ URL::to('/') }}/area2/H/2HI_8">engage in practices which enable the faculty to demonstrate harmonious interpersonal relations with the students, parents and the community. </a></li>
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
							<li><a href="{{ URL::to('/') }}/area2/H/2HO_1">The corps of faculty manifests a commendable level of professionalism.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  		</div>
		  		<!-- End of PARAMETER H -->
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