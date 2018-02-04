
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">AREA 4: Research</div>
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
						    	<li><a href="{{ URL::to('/') }}/area4/A/4AS_1"> The institution has Student Services Program (SSP).</a></li>
						    	<li><a href="{{ URL::to('/') }}/area4/A/4AS_2">The Student Affairs Services (SAS) program is consistent with the vision and mission of the Institution, goals of the College/Academic Unit and objectives of the Program. </a></li>
						    	<li><a href="{{ URL::to('/') }}/area4/A/4AS_3">The objectives of the SAS are clearly defined. </a></li>
						    	<li><a href="{{ URL::to('/') }}/area4/A/4AS_4">The objectives of the SAS are in accordance with CMO No. 9 series of 2013.  </a></li>
						      	<li data-toggle="collapse" href="#sub-parameter1"><a href="">The SAS is composed of: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
							      	<ol id="sub-parameter1" class="panel-collapse collapse">
										<li><a href="{{ URL::to('/') }}/area4/A/4AS_5_1">student welfare program </a></li>
										<li><a href="{{ URL::to('/') }}/area4/A/4AS_5_2">student development programs and services.</a></li>
								    </ol>
								<li data-toggle="collapse" href="#sub-parameter2"><a href="">The following basic services are available: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
									<ol id="sub-parameter2" class="panel-collapse collapse">
								    	<li data-toggle="collapse" href="#sub-parameter3"><a href=""> Student Welfare<span class="glyphicon glyphicon-chevron-down"></span> </a></li>
											<ol id="sub-parameter3" class="panel-collapse collapse">
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_6_1">Information and Orientation Services</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_6_2">Guidance and Counseling Services</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_6_3">Career and Job Placement Services</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_6_4">Economic Enterprise Development</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_6_5">Student Handbook Development</a></li>
											</ol>
										<li data-toggle="collapse" href="#sub-parameter4"><a href="">Student Development<span class="glyphicon glyphicon-chevron-down"></span> </a></li>
											<ol id="sub-parameter4" class="panel-collapse collapse">
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_7_1">Student Activities</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_7_2">Student Organizations and Activities</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_7_3">Leadership Training</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_7_4">Student Council/Government</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_7_5">Student Discipline</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_7_6">Student Publication/Year Book</a></li>
											</ol>
										<li data-toggle="collapse" href="#sub-parameter5"><a href="">Institutional Student Programs and Services<span class="glyphicon glyphicon-chevron-down"></span> </a></li>
											<ol id="sub-parameter5" class="panel-collapse collapse">
												<li><a href="{ URL::to('/') }}/area4/A/4AS_8_1">Student Activities</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_8_2">Student Organizations and Activities</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_8_3">Leadership Training</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_8_4">Student Council/Government</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_8_5">Student Discipline</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_8_6">Student Publication/Year Book</a></li>
											</ol>
										<li data-toggle="collapse" href="#sub-parameter6"><a href="">Institutional Student Programs and Services <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
											<ol id="sub-parameter6" class="panel-collapse collapse">
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_1">Admission Services</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_2">Scholarships and Financial Assistance (SFA)</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_3">Food Services</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_4">Health and Wealth Services</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_5">Safety and Security Services</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_6">Student Housing and Residential Services;</a></li>
												<li><a href="">Multi-faith and Inter-faith Services</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_7">Foreign/International Students Services (whenever applicable)</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_8">Services for Students with Special Needs</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_9">Culture and Arts Programs</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_10">Sports and Development Programs</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_11">Social and Community Involvement Programs</a></li>
												<li><a href="{{ URL::to('/') }}/area4/A/4AS_9_12">others <i>(please specify)</i> ________________.</a></li>
											</ol>
									</ol>
								<label>Student Affairs and Services Units</label>
									<li><a href="{{ URL::to('/') }}/area4/A/4AS_10_1">There is a SAS Unit that manages student affairs development and welfare programs.</a></li>
									<li><a href="{{ URL::to('/') }}/area4/A/4AS_10_2"> The SAS Unit has no organizational structure indicating its relationship with other Units.</a></li>
									<li><a href="{{ URL::to('/') }}/area4/A/4AS_10_3">The SAS Unit is headed by a qualified official.</a></li>
									<li><a href="{{ URL::to('/') }}/area4/A/4AS_10_4">The SAS Unit is staffed with qualified personnel.</a></li>
								<label>Administrative Support</label>
									<li><a href="{{ URL::to('/') }}/area4/A/4AS_10_5">The various student services are provided with adequate stuff, physical, facilities and materials (e.g. one (1) guidance counselor for every 1,000 students, etc.)</a></li>
									<li><a href="{{ URL::to('/') }}/area4/A/4AS_10_6">There is sufficient budget allocation for the Student Affairs and Services of the institution.</a></li>
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
								<li><a href="{{ URL::to('/') }}/area4/A/4AI_1">The objectives of the SAS are disseminated to and understood by the students, faculty, staff and administrators.</a></li>
								<li><a href="{{ URL::to('/') }}/area4/A/4AI_2"> The SAS plans, implements, monitors and coordinates programs and services for student welfare and development.</a></li>
								<li><a href="{{ URL::to('/') }}/area4/A/4AI_3">Prompt, courteous and efficient services in the handling of business transactions with students are evident.</a></li>
								<li><a href="{{ URL::to('/') }}/area4/A/4AI_4">The SAS staff receive salaries on time.</a></li>
								<li><a href="{{ URL::to('/') }}/area4/A/4AI_5">The SAS is represented in the policy and decision-making body of the institution.</a></li>
								<li><a href="{{ URL::to('/') }}/area4/A/4AI_6">The projects and activities of the SAS Unit are recognized and implemented.</a></li>
								<li><a href="{{ URL::to('/') }}/area4/A/4AI_7">There is a continuous and systematic evaluation of the effectiveness of the programs and services for student welfare and development.</a></li>
								<li><a href="{{ URL::to('/') }}/area4/A/4AI_8"></a></li>
						   	</ol>
							</td>
						</tr>
						<!-- OUTCOME -->
						<thead>	
							<tr>
								<th data-toggle="collapse" href="#collapse3">Outcome/s</th>
							</tr>
							</thead>
							<tr>
								<td>
								<ol id="collapse3" class="accrdn">
						      		<li><a href="{{ URL::to('/') }}/area4/A/4AO_1">The students are satisfied with the Student Services Program.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseB">B. Student Welfare</a>
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
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_1">The institution has a Student Handbook containing comprehensive information on programs and services for student welfare and development.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_2">A regular and comprehensive Orientation Program is held for new, returning and containing students.</a></li>
							<li data-toggle="collapse" href="#sub-parameter7"><a href="">The information materials on educational, career, personal and social concerns are readily available, such as: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter7" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_3_1">RA 9262 or Anti Violence Against Women and Children Act.</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_3_2">Anti-Bullying Act</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_3_3"> Guidelines on drug abuse prevention and control</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_3_4">R.A. 7877 or the Anti-Sexual Harassment Act of 1995</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_3_5">HIV AIDS awareness</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_3_6">Self-care and healthy lifestyles</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_3_7">R.A. 9442, particularly on the provision on public ridicule and verification against persons with disability.</a></li>
								</ol>
							<li data-toggle="collapse" href="#sub-parameter8"><a href="">The Guidance and Counselling Program provides the Following sentences: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter8" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_4_1">information and inventory</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_4_2">counselling</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_4_3">appraisal and testing</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_4_4">placement and follow-up</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BS_4_5">referral</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_5">Gender sensitive individual and group counselling.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_6">Counselling Services consider cultural differences.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_7">The Guidance Program is headed by a licensed Guidance Counselor with at least a master’s degree in Guidance and Counseling.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_8">All the Guidance Counselors are licensed.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_9">The Guidance Program is Supported by qualified staff.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_10">Every student has an updated profile at the guidance office.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_11">A counseling room is provided for students including those with special needs.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_12">There is a well-planned assessment program for students with appropriate standardized psychological tests.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_13">Career seminars and job placement services are available for the students.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BS_14">There is a mechanism to establish partnership and collaboration with other institutions, agencies and industry.</a></li>
				      		<li><a href="{{ URL::to('/') }}/area4/B/4BS_15">There is mechanism for storing and archiving student records for reference purposes.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_1">The ratio of a Guidance Counselor to student population is 1:1000.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_2"> Counseling and other student records are maintained and kept confidential.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_3">Appropriate Intervention programs and services are adopted to promote and enhance student welfare and development.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_4">The Guidance Office maintains an updated inventory of student cumulative records.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_5">The psychological tests are administered, scored and interpreted by qualified staff and results are kept confidential.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_6">The test results are disseminated to concerned parties.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_7">Test results are utilized in designing activities to meet student needs.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_8"> A scheme for appropriate follow-up and referrals is utilized.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_9">The Guidance office prepares valid appraisal data of students for career and job placement.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_10">The Guidance office prepares valid appraisal data of students for career and job placement.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_11">The institution maintains active networking with the schools, the communities, alumni, and other concerned agencies for career and job placement of students.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_12">Career counseling is provided to enable students to choose appropriate major/field of specialization</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_13">Information materials on career and job opportunities are made accessible.</a></li>
							<li data-toggle="collapse" href="#sub-parameter9"><a href=""> The SAS maintains liaison with alumni to follow up graduates job performance, vis-à-vis: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter9" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area4/B/4BI_14_1">awards received</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BI_14_2">key positions in private and/or government agencies</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BI_14_3">status of the enterprise, if applicable.</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_15">Skills development programs are conducted</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_16">The students are given assistance in career and job placement.</a></li>
							<li data-toggle="collapse" href="#sub-parameter10"><a href="#">The institution encourages student economic ventures such as but not limited to:</a></li>
								<ol id="sub-parameter11" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area4/B/4BI_17_1">student laboratory cooperatives</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BI_17_2">entrepreneurial activities/projects</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BI_17_3">savings</a></li>
									<li><a href="{{ URL::to('/') }}/area4/B/4BI_17_4">others <i>(please specify)</i></a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_18">Updated information on student welfare and development are accessible and disseminated.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/B/4BI_19">The student body is involved in the development and revision of Student Handbook.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area4/B/4BO_1">Quality student welfare services are available.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseC">C. Student Development</a>
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
							<li><a href="{{ URL::to('/') }}/area4/C/4CS_1">The institution has a system accreditation, monitoring and evaluation of student organizations.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/C/4CS_2">The institution provides adequate office space and other forms of support to accredited student organizations.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/C/4CS_3"> There is coordination between the school administration and SAS concerning students with drug and other related problems.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/C/4CS_4"> A mechanism to address student grievances is in place.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/C/4CS_5">Programs and opportunities to develop and enhance leadership among students are provided.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area4/C/4CI_1">Requirements and procedures for recognition/accreditation of student organizations are widely disseminated.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/C/4CI_2">The Constitution by-laws of student organizations incorporate participation and advocacy in social action activities.</a></li>
							<li data-toggle="collapse" href="sub-parameter12"><a href="">The institution recognizes the right of students to: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter12" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area4/C/4CI_3_1">govern themselves as a student body</a></li>
									<li><a href="{{ URL::to('/') }}/area4/C/4CI_3_2">be transparent and accountable and their constituents</a></li>
									<li><a href="{{ URL::to('/') }}/area4/C/4CI_3_3">be represented in various for a where students need to be consulted</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area4/C/4CI_4">The institution ensures transparency in the development /revision of guidelines and procedures for the student council/government.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/C/4CI_5">The institution implements gender and disability sensitive rules and regulations published in a Student Handbook/Manual acceptable to students </a></li>
							<li><a href="{{ URL::to('/') }}/area4/C/4CI_6">Sanctions are enforced for misconduct such as but not limited to acts of vandalism, hazing, bullying, libelous statements and other negative acts that threaten peace and order inside ad outside the school premises.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/C/4CI_7">Grievance Committee is established to ensure due process in dealing with students misconduct.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/C/4CI_8">The institution supports the establishment and implementation of student publication as provided for in R.A. 7079, otherwise known as “Campus Journalism Act of 1991” and other media forms.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/C/4CI_9">The production/publication of a yearbook is encouraged.</a></li>

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
							<li><a href="{{ URL::to('/') }}/area4/C/4CO_1">Quality student development services are assured.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseD">D. Institutional Student Programs and Services</a>
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
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_1">There is a system of student recruitment, selection, admission and retention.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_2"> Admission requirements and procedures of persons with disabilities as stipulated in R.A. 7277 are in place.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_3">Scholarships and financial assistance in various forms are available to students.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_4">Policies and guidelines are institutionalized for students from marginalized sectors of the country.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_5">There is a policy on wellness and healthy lifestyle.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_6">Buildings and facilities which conform with government standards are provided with accessible and safe amenities for persons with disabilities.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_7">There is a disaster risk reduction and management program I compliance with R.A. 10121. Otherwise known as “Philippines Disaster Risk Reduction and Management 2010”.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_8">Policies on the us of student facilities are in place.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_9">An integrated service program that caters to the various needs of foreign students are available, whenever applicable.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_10">A liaison officer is available to assist foreign students in their transactions with concerned government agencies, whenever applicable.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_11">There are programs for life skills training (e.g. conflict and stress management, harassment, etc.) counseling, testing and referrals for students with special needs.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_12">The institution provides opportunities for promotion and appreciation of culture and arts.</a></li>
							<li data-toggle="collapse" href="#sub-parameter13"><a href="">The institution has well equipped offices for: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter13" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_13_1">Culture and the Arts</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_13_2">Sports Development</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_13_3">Student Publications</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_13_4">Medical-Dental Clinic</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_14">There is a well-furnished medical-dental clinic.</a></li>
							<li data-toggle="collapse" href="#sub-parameter14"><a href="">There is a medical and dental program designed for: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter14" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_15_1">diagnostic purposes</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_15_2">first aid</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_15_3">prevention and prophylaxis</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_15_4">physical-dental exam</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_16"> An updated information on student health condition is available to parents/guardians.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DS_17">There are mechanisms to promote national, sectoral and cultural sports activities and development in coordination with concerned agencies.</a></li>
							<li data-toggle="collapse" href="#sub-parameter15"><a href="">There are financial assistance programs designed for: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter15" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_18_1">educational loans</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_18_2">student assistantship</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_18_3">attendance to seminars, training (sports, leadership, etc.)</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_18_4">grants-in-aid</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DS_18_5">others (please specify) ______________</a></li>
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
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_1">The faculty and the students are properly informed of the admission guidelines and retention policies.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_2">The policies and procedures on selection, admission and retention of students are implemented.</a></li>
							<li data-toggle="collapse" href="#sub-parameter16"><a href="">The following student admission records are filed and made available to concerned parties:</a></li>
								<ol id="sub-parameter16" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area4/D/4DI_3_1">enrollment trends</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DI_3_2">drop-out rate</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DI_3_3">licensure examination results and passing percentage</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DI_3_4">employability of graduates</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DI_3_5">student transferees</a></li>
									<li><a href="{{ URL::to('/') }}/area4/D/4DI_3_6">student classification by specialization</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_4">Retention policies are approved by the Academic Council and confirmed by the Board of Regents/Trustees.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_5">The list of tuition and other school fees is posted conspicuously.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_6">The institution provides access to scholarship and financial assistance.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_7">Guidelines on scholarship and financial assistance are widely and promptly disseminated.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_8">Criteria for safety, sanitation and food choices in the school canteen/cafeteria are enforced.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_9">The institution coordinates with the local government for the safety and sanitation of food service outside the school premises.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_10">The institution periodically inspects foods outlets for sanitation and hygiene. The sanitary permit is displayed in a prominent area of the food outlet.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_11">The primary health care services are administered to all students by licensed medical, dental and allied professionals.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_12">facilities for keeping health care and updated health records of students are adequate and well-maintained.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_13">Policies and procedures in the selection of student athletes, performers, writers, etc. are implemented</a></li>
							<li><a href="{{ URL::to('/') }}/area4/D/4DI_14">The institution informs the students and other stakeholders on other related programs and services not cited in CMO No. 9 s. 2013.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area4/D/4DO_1">The institutional programs and services develop student potentials to the fullest.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseE">E. Research, Monitoring and Evaluation</a>
					</h4>
				</div>
				<div id="collapseE" class="panel-collapse collapse">
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
							<li><a href="{{ URL::to('/') }}/area4/E/4ES_1">The institution has a research program on student affairs and services.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/E/4ES_2">There is mechanism for monitoring and evaluation of SAS programs.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/E/4ES_3">Monitoring and evaluation instruments are available.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/E/4ES_4">There is adequate funding for the conduct of SAS researches and monitoring evaluation.</a></li>

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
							<li><a href="{{ URL::to('/') }}/area4/E/4EI_1">Researches on student affairs and services are conducted.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/E/4EI_2">Research results and outputs are disseminated and utilized.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/E/4EI_3">Regular monitoring and evaluation on the implementation of student services are conducted.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/E/4EI_4">Monitoring and evaluation instruments are developed, reviewed, and continuously improved.</a></li>
							<li><a href="{{ URL::to('/') }}/area4/E/4EI_5">Reports are filled and submitted regularly to CHEDRO.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area4/E/4EO_1">Research outputs are presented and published.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  		</div>
		  		<!-- End of PARAMETER E -->
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