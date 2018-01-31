
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">AREA 3: Curriculum and Instruction</div>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseA">A.	Curriculum and Program of Studies</a>
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
						    	<li  data-toggle="collapse" href="#sub-parameter2"><a>The curriculum provides for the development of the following professional competencies: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
						    		<ol id="sub-parameter2" class="panel-collapse collapse">
										<li><a href="{{ URL::to('/') }}/area3/A/3AS_1_1">Acquisition of knowledge and theories based on the field of specialization/discipline</a></li>
										<li><a href="{{ URL::to('/') }}/area3/A/3AS_1_2">Application of the theories to real problems in the field</a></li>
										<li><a href="{{ URL::to('/') }}/area3/A/3AS_1_3">Demonstration of skills in applying different strategies in actual work setting.</a></li>
								    </ol> 
						      	<li><a href="{{ URL::to('/') }}/area3/A/3AS_2">There is a system of validation of subjects taken from other schools</a></li>
						      	<li><a href="{{ URL::to('/') }}/area3/A/3AS_3">The curriculum reflects the local, regional and national development goals as well as the institution’s vision and mission.</a></li>
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
								<li data-toggle="collapse" href="#sub-parameter3"><a href="">The curriculum/program is implemented utilizing and/or even judiciously exceeding CHED requirements and standards as follows:<span class="glyphicon glyphicon-chevron-down"></span></a></li>
						    		<ol id="sub-parameter3" class="panel-collapse collapse">
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_1_1">General Education (54 units)</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_1_2">Basic ITE Core Course (18 units)</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_1_3">Professional Courses (33 units)</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_1_4">ITE Elective (12 units)</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_1_5">Free Elective (9 units)</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_1_6">PE (8 units)</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_1_7">NSTP (6 units)</a></li>
									</ol>
						      	<li><a href="{{ URL::to('/') }}/area3/A/3AI_2">The subjects are logically sequenced and prerequisite courses are identified.</a></li>
						      	<li><a href="{{ URL::to('/') }}/area3/A/3AI_3">The curricular content is responsive to the needs of the country and recent developments in the profession.</a></li>
						      	<li><a href="{{ URL::to('/') }}/area3/A/3AI_4">The curricular content covers the extent of the professional and technical preparation required of its graduates.</a></li>
						      	<li><a href="{{ URL::to('/') }}/area3/A/3AI_5">The curriculum integrates values, reflective of national customs, culture and tradition in cases where applicable.</a></li>
						      	<li><a href="{{ URL::to('/') }}/area3/A/3AI_6">Opportunities for participation in hands-on activities, such as immersion/practical training and field study are maintained in the curriculum development.</a></li>
						      	<li data-toggle="collapse" href="#sub-parameter4"><a href="">The following activities planning and designing of the curriculum by the following stakeholders:<span class="glyphicon glyphicon-chevron-down"></span></a></li>
						      	<ol id="sub-parameter4" class="panel-collapse collapse">
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_7_1">Administration</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_7_2">Faculty</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_7_3">Students</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_7_4">Alumni</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_7_5">Representatives from the industry/sector</a></li>
						    			<li><a href="{{ URL::to('/') }}/area3/A/3AI_7_6">Others (please specify)</a></li>
									</ol>
								<li><a href="{{ URL::to('/') }}/area3/A/3AI_8">Periodic review, assessment, updating and approval of the curriculum by the Academic Council</a></li>
								<li><a href="{{ URL::to('/') }}/area3/A/3AI_9">Confirmation of the curriculum by the Board of Regents/Trustees (BOR/BOT)</a></li>
								<li><a href="{{ URL::to('/') }}/area3/A/3AI_10"> Others (please specify)</a></li>
								<li><a href="{{ URL::to('/') }}/area3/A/3AI_11">The program of study allows the accommodation of students with special needs and assists to finish the degree</a></li>
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
						      		<li><a href="{{ URL::to('/') }}/area3/A/3AO_1">The curriculum is responsive and relevant to the demands of the times</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseB">B.	Instructional Process, Methodologies and Learning Opportunities</a>
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
							<p>Syllabus and Instuctional Materials</p>
							<li><a href="{{ URL::to('/') }}/area3/B/3BS_1">There is an institutional outcomes-based standard format in the preparation of course syllabi</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BS_2">The syllabus includes a list of suggested readings and references of print and electronic resources within the last ten (10) years</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BS_3">Copies of all course syllabi during the term are at the Dean's office or aby other appropriate repository.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BS_4">Copies of all course syllabi in the previous terms are filed for reference purposes.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BS_5">Threre is provision for remedial measures to strengthen the basic skills in Mathematics and English and other "tool" subjects.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BS_6">There is a mechanism to facilitate the teaching-learning process.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<!-- PARAMETER B Implementation -->
					<thead>	
					<tr>
						<th>Implementation</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href="{{ URL::to('/') }}/area3/B/3BI_1">the Dean or official concerned approves the updated syllabus for each subject</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BI_2">The faculty prepares syllabi with comprehensive contents.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BI_3">Thr faculty revise and enhances their syllabi preferably every two (2) years and as needed.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BI_4{{ URL::to('/') }}/area3/B/3BI_5">The faculty distributres a copy of the syllabus to each student</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BI_5">Teaching strategies stimulate the development of the students' thigher-order thinking skills (HOTS) such as critical thinking, analytical thinking, creative thinking and problem-solving.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>

					<!-- PARAMETER B Implementation -->
					<thead>	
					<tr>
						<th>Teaching Strategies</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li data-toggle="collapse" href="#sub-parameter5"><a href="">Classroom instruction is enriched through theuse of the following strategies:<span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter5" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_5_1">Symposia, seminars, workshops, professional lectures</a></li>			
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_5_2">Educational tours/learning visits/oteher co-curricular activities</a></li>						
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_5_3">Computer-assisted instruction (CAI) and computer-assisted learning (CAL)</a></li>						
								</ol>
							<li data-toggle="collapse" href="#sub-parameter6"><a href="">At least three(3) of the following course requirements are used:<span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter6" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_6_1">group/individual projects</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_6_2">group/individual reports</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_6_3">group/individual term papers</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_6_4">performance activities</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_6_5">learning contract</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_6_6">portfolio</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_6_7">learning modules</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_6_8">research, study</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_6_9">others (please specify)</a></li>
								</ol>
							<li data-toggle="collapse" href="#sub-parameter7"><a href="">Instruction is enriched through the use of at least ten (10) of the following techniques/strategies<span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter7" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_1">film showing</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_2">projects</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_3">group dynamics</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_4">case study</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_5">workshops</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_6">simulations</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_7">dimensional question approach</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_8">breainstorming</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_9">buzz sessions</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_10">informal creative groups</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_11">interactive learning</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_12">micro teaching</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_13">macro teaching</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_14">tandem teaching</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_15">peer teaching</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_16">multi-media/courseware/teachware</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_17">experiments</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_18">problem solving</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_19">type study methods</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_20">reporting</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_21">panel discussion</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_7_22">others (please specify)</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area3/B/3BI_8">Instructional strategies provide for student's individual needs and multiple intelligences</a></li>
							<li data-toggle="collapse" href="#sub-parameter8"><a href="">Instruction is enhanced through the following:<span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter8" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_8_1">submission of approved and updated syllabus per course</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_8_2">regular classroom observation/supervision</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_8_3">regular faculty meetings with the College/Academic Unit/Dean/Department Chair</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_8_4">regular faculty performance evaluation</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_8_5">attendance/participation of faculty in in-service training</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_8_6">conduct of experimental classes</a></li>
									<li><a href="{{ URL::to('/') }}/area3/B/3BI_8_7">adoption of alternative instructional delivery modes such as modular instruction, e-learning and on-line study</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area3/B/3BI_9">Instructional materials (IMs) are reviewed and recommended by the Instructional Materials Committee (IMC).</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BI_">Varied, multi-sensory materials and computer programs are utiized.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BI_">The College/Academic Unit maintains consortia and linkages with other learning institutions for academic exchange of instructional materials.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BI_">The faculty are cncouraged to produce their own instructional materials such as modules, software, visual aids, manuals and textbooks</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<!-- PARAMETER B Outcome -->
					<thead>	
					<tr>
						<th>Outcome/s</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href="{{ URL::to('/') }}/area3/B/3BO_1">Course syllabi are updated and approved by concerned authorities.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BO_2">varied teaching strategies are efficiently and effectively used</a></li>
							<li><a href="{{ URL::to('/') }}/area3/B/3BO_3">instructional Materials produced by the faculty are copyrighted/patented.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseC">C. Assessment of Academic Performance</a>
					</h4>
				</div>
				<div id="collapseC" class="panel-collapse collapse">
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
							<li data-toggle="collapse" href="sub-parameter9"><a href="">The program of studies has a system of evaluating student performance through a comination of the following: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter9" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/C/3CS_1_1">Formative tests such as quizzes, units tests</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CS_1_2">summative tests such as mid-term and final examinations</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CS_1_3">project and term papers</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CS_1_4">practicum and performance tests</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CS_1_5">other course requirements</a></li>
								</ol>
							<li data-toggle="collapse" href="sub-parameter10"><a href="">The summative tests have the following descriptions:</a></li>
								<ol id="sub-parameter10" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/C/3CS_2_1">comprehensive enought to test the different levels of cognitive skills and knowledge of content</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CS_2_2">based on well-designed Table of Specifications (TOS)</a></li>
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
							<li data-toggle="collapse" href="sub-parameter11"><a href="">Varied evaluation measures are used, such as: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter11" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_1_1">portfolio</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_1_2">rubric assessment</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_1_3"> skills demonstration</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_1_4">paper and pencil tests</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_1_5">oral examinations</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_1_6">group/individual reports</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_1_7">group/individual study</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_1_8">others <i>(please specify)</i> </a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area3/C/3CI_2">Evaluation tools/instruments are reviewed and revised periodically.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/C/3CI_3">The faculty are trained how to assess student performance properly</a></li>
							<li><a href="{{ URL::to('/') }}/area3/C/3CI_4">The College/Academic Unit encourages and supports assessment for multiple intelligences.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/C/3CI_5">Course and test requirements are returned to students after results are checked, recovered and analyzed.</a></li>
							<li data-toggle="collapse" href="sub-parameter12"><a href="">The system of student evaluation and grading is defined, understood, and disseminated to: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter12" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_6_1">students</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_6_2">faculty</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_6_3">academic administrators</a></li>
									<li><a href="{{ URL::to('/') }}/area3/C/3CI_6_4">parents/guardians</a></li>
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
							<li><a href="{{ URL::to('/') }}/area3/C/3CO_1">The student's academic performance is commendable.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/C/3CO_2">Retention rate of students is on the average.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseG">D. Management of Learning</a>
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
							<li data-toggle="collapse" href="#sub-parameter13"><a href="">There are policies on management of learning which includes the following: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter13" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/D/3DS_1_1">student attendance in class and other academic activities</a></li>
									<li><a href="{{ URL::to('/') }}/area3/D/3DS_1_2">schedule of classes</a></li>
									<li><a href="{{ URL::to('/') }}/area3/D/3DS_1_3">student discipline</a></li>
									<li><a href="{{ URL::to('/') }}/area3/D/3DS_1_4">maintenance of cleanliness and orderliness</a></li>
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
							<li><a href="{{ URL::to('/') }}/area3/D/3DI_1">The policies on management of learning are enforced.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/D/3DI_2">Student activities are well-planned and implemented.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/D/3DI_3">Assignments are designed to reinforce teaching which results in student maximum learning </a></li>
							<li data-toggle="collapse" href="#sub-parameter14"><a href="">In classses using lecture and other similar methods of teaching, the number of students does not exceed 50.</a></li>
								<ol id="sub-parameter14" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/D/3DI_4_1">48 sqm – 25 students</a></li>
									<li><a href="{{ URL::to('/') }}/area3/D/3DI_4_2">60 sqm – 50 students</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area3/D/3DI_5">Classroom discipline is maintained in accordance with democratic practices.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/D/3DI_6">The class officers and assigned students assist in maintaining  cleanliness of classrooms, laboratories, corridors and the school campus.</a></li>
							<li data-toggle="collapse" href="#sub-parameter15"><a href="">Independent work and performance are encouraged and monitored in the following activities:</a></li>
								<ol id="sub-parameter15" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/D/3DI_7_1">projects/reports</a></li>
									<li><a href="{{ URL::to('/') }}/area3/D/3DI_7_2">thesis</a></li>
									<li><a href="{{ URL::to('/') }}/area3/D/3DI_7_3">others <i>(please specify)</i></a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area3/D/3DI_4">In practivum courses, (field study, OJT, practice teaching, etc;) the number of trainees supervised by each coordinator does not exceed 50.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area3/D/3DO_1">Learning is efficiently and effectively managed.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseE">E. Graduation Requirements</a>
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
							<li><a href="{{ URL::to('/') }}/area3/E/3ES_1">There is a policy on graduation requirements.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area3/E/3EI_1">The students are regularly informed of the academic requirements of their respective courses</a></li>
							<li><a href="{{ URL::to('/') }}/area3/E/3EI_2">The College/Academic Unit implements the system for student returnees and transferees to meet the residence and other graduation requirements.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/E/3EI_3">Graduating students conduct research and/or undergo practicum/OJT or other activities prescribed in their respective curricula.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/E/3EI_4">The College/department of Information Technology assists the graduating students with acaddemic deficiencies, disciplinary cases, and other problems which hinder issuance of clearances.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/E/3EI_5">Clearance from academic and financial accountabilities and responsibilites is required before graduation.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area3/E/3EO_1">At least 60% of the students enrolled in the program are able to graduate within the regular time frame.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseF">F. Administrative Support for Effective Instruction</a>
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
							
							<li data-toggle="collapse" href="#sub-parameter16"><a href="">The institution has policies on: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="#sub-parameter16" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/F/3FS_1_1">Substitution or special arrangements whenever a faculty is on leave or absent</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FS_1_2">Giving awards and/or recognition for faculty and students with outstanding achievements</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FS_1_3">Supervision/monitoring and evaluation of faculty performance.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area3/F/3FI_1">The institution implements rules on the attendance of the faculty in their respective classes and other academic related activities.</a></li>
							<li data-toggle="collapse" href="#sub-parameter17"><a href="">Dialogues are regularly conducted by the administration with the <span class="glyphicon glyphicon-chevron-down"></span> </a></li>s
								<ol id="sub-parameter17" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_2_1">faculty</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_2_2">students</a></li>
								</ol>
							<li data-toggle="collapse" href="#sub-parameter18"><a href=""></a></li>
								<ol id="sub-parameter18" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_3_1">Conducting seminar/workshops on syllabi making</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_3_2">Holding workshop on test construction and the corresponding table of specifications</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_3_3">Conducting competency assessment</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_3_4">Conducting supervisory cisit of classes and providing assistance. <i>if necessary</i> </a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_3_5">Holding of regular faculty meetings</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_3_6">Requiring consultations between students and faculty</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_3_7">Conducting studies on academic performance of students</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_3_8">Providing opportunities for the participation of the faculty in in-service training activities.</a></li>
								</ol>
							<li data-toggle="collapse" href="#sub-parameter19"><a href="">Periodic faculty performance evaluation on teaching and in other functions is conducted by at least three of the following: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter19" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_4_1">the Dean/Academic Head/Department Chair</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_4_2">the students</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_4_3">the faculty member himself/herself</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_4_4">peers</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_4_5">others <i>(please specify)</i> </a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area3/F/3FI_5">The results of the performance evaluation are used to improve the performance/competencies of the faculty.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/F/3FI_6">Students are given recognition for exemplary academic and non-academic performances.</a></li>
							<li data-toggle="collapse" href="#sub-parameter20"><a href="">Outstanding achievement of students is recognized and encouraged through: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter20" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_7_1">inclusion in honor roll, Dean's list, etc;</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_7_2">grant of tuition scholarships</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_7_3">award of honor medals and merit certificates</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_7_4">membership in honor/socities/honor class/sections etc;</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_7_5">grant of special privileges such as opportunities ffor leadership and others (excluding exemption from major exams on all professional business subjects)</a></li>
									<li><a href="{{ URL::to('/') }}/area3/F/3FI_7_6">grant of awards and recognition for outstanding academic accomplishments, e.g., Best Thesis, Student Researcher of the Year, etc.</a></li>
								</ol>
							<li data-toggle="collapse" href="#sub-parameter21"><a href="">Indicators on performance of graduates are studied such as:</a></li>
				      			<ol id="sub-parameter21" class="panel-collapse collapse">
				      				<li><a href="{{ URL::to('/') }}/area3/F/3FI_8_1">analysis of performance of graduates in the Information Technology Licensure Examination <i>(if applicable)</i> </a></li>
				      				<li><a href="{{ URL::to('/') }}/area3/F/3FI_8_2">employability og graduates</a></li>
				      				<li><a href="{{ URL::to('/') }}/area3/F/3FI_8_3">feedback from employers regarding performance of graduates</a></li>
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
							<li><a href="{{ URL::to('/') }}/area3/F/3FO_1">The faculty and students have commendable performance as a result of administrative support.</a></li>
							<li><a href="{{ URL::to('/') }}/area3/F/3FO_2">The graduates of the program are employable.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  		</div>
		  		<!-- End of PARAMETER F -->
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