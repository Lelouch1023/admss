
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">AREA 10: Administration</div>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseA">A. Organization</a>
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
								<li><a href="{{ URL::to('/') }}/area10/A/10AS_1">The institution has an organizational structure approved by the Board of Regents/Trustees (BOR/BOT)</a></li>
								<li><a href="{{ URL::to('/') }}/area10/A/10AS_2">Every office/unit in the organizational structure has functions approved by the BOR/BOT.</a></li>
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
								<li><a href="{{ URL::to('/') }}/area10/A/10AI_1">The institution is subdivided into administrative units in accordance with the organizational structure.</a></li>
								<li><a href="{{ URL::to('/') }}/area10/A/10AI_2">The functions, duties and responsibilities of the administrative personnel/staff in each unit/office are identified and carried out.</a></li>
								<li><a href="{{ URL::to('/') }}/area10/A/10AI_3">The Board Regents/Trustees is supportive with the growth and development of the institution.</a></li>
								<li><a href="{{ URL::to('/') }}/area10/A/10AI_4">The Academic and Administrative Councils exercise their powers and perform their functions.</a></li>
								<li><a href="{{ URL::to('/') }}/area10/A/10AI_5">The flow of communication among and within units/departments is observed.</a></li>
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
						      		<li><a href="{{ URL::to('/') }}/area10/A/10AO_1">The institution has a well-designed and functional organizational structure.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseB">B. Academic Administration</a>
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
							<li data-toggle="collapse" href="#sub-parameter1"><a href="">The Dean/Academic Unit Head possesses the required educational qualification, experience and other prescribed requirements needed to administer the College/Academic Unit, as follows: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter1" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area10/A/10BS_1_1">Ms in ITE program at least three (3) years of IT work/consultancy experience, and at least three computer literacy both of which mus be within the last five (5) years.</a></li>
									<li data-toggle="collapse" href="#sub-parameter2"><a href="#">Phd/MS in an ITE allied program and any of the following: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
										<ol id="sub-parameter2" class="panel-collapse collapse">
											<li><a href="{{ URL::to('/') }}/area10/A/10BS_1_2_1">completion of coursework requirements;</a></li>
											<li><a href="{{ URL::to('/') }}/area10/A/10BS_1_2_2">five (5) years experience in systems design, applications programming, IT project management, or information technology research within the last eight (8) years.</a></li>
										</ol>
									<li><a href="{{ URL::to('/') }}/area10/A/10BS_1_3">doctorate in an ITE program and at least three (3) years of IT work/consultancy experience within the last five (5) years;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/A/10BS_1_4">doctorate in an ITE allied program, at least three (3) years of work/consultancy experience, at least five (5) years of ITE teaching experience beyond the computer literacy both of which must be within the last five (5) years.</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area10/A/10BS_2">The Department Chair/s or their equivalent has appropriate/relevant educational qualification and experience.</a></li>
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
							<li data-toggle="collapse" href="#sub-parameter3"><a href="">The Dean is assisted by Department Chairs or their equivalent with appropriate/relevant educational qualification and experience as follows: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter3" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area10/B/10BI_1_1">Master's degree in any ITE program.</a></li>
									<li data-toggle="collapse" href="#sub-parameter4"><a href="#">Master's degree in an ITE allied program and at least any of the following: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
										<ol id="sub-parameter4" class="panel-collapse collapse">
											<li><a href="{{ URL::to('/') }}/area10/B/10BI_1_2_1">completion of coursework requirements for a maaster's degree in any of the ITE programs;</a></li>
											<li><a href="{{ URL::to('/') }}/area10/B/10BI_1_2_2">five (5) years experience in systems design, application programming, IT project management or information technology research within the last eight (8) years.</a></li>
										</ol>
									<li><a href="{{ URL::to('/') }}/area10/B/10BI_1_3">doctorate in an ITE allied program  and five (5) years experience teaching ITE (beyond computer literacy courses) within the last eight (8) years.</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area10/B/10BI_2">The Dean implements asupervisory program.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/B/10BI_3">The Dean participates in the recruitment and promotion of faculty and staff.</a></li>
							<li id="sub-parameter5" class="panel-collapse collapse"><a href="">The Dean, the faculty and the administration work together for the improvement of the College/Academic Unit particularly in: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter5" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area10/B/10BI_4_1">setting standards and targets;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/B/10BI_4_2">planning of programs and otehr related activities;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/B/10BI_4_3">implementing, monitoring and evaluation of plans, programs and other related activities;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/B/10BI_4_4">establishing linkages, partnerships and networking activities;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/B/10BI_4_5">providing opportunities for professional growth and development of the faculty and staff;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/B/10BI_4_6">preparing policies and guidelines in the internal administration and operation of the College/Academic Unit;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/B/10BI_4_7">preparing guidelines on the proper use and maintenance of facilities, equipment, supplies and materials, etc.</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area10/B/10BI_5">Definite criteria and procedures in the selection and promotion of the most qualified faculty and staff are observed.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/B/10BI_6">The Dean, faculty, staff and students pursue collaborative activities in generating resources and income and in implementing cost-effective measures.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/B/10BI_7">The Dean implements policies and procedures on internal administration and operations of the College/Academic Unit.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/B/10BO_1">The College/Academic Unit is efficiently and effectively managed.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseC">C. Student Administration</a>
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
							<li data-toggle="collapse" href="#sub-parameter6"><a href="">The institution has an approved and printed Student Handbook/Manual containing policies and guidelines on the following aspects of student life: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
								<ol id="sub-parameter6" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_1">admission and retention;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_2">registration requirements;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_3">school fees;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_4">academic load;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_5">transfers;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_6">residence, course work, scholastic and graduation requirements;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_7">examination and grading system;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_8">scholarships/grants/assistantships;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_9">shifting and adding/dropping of course/s/subject/s;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_10">code of conduct and discipline;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_11">attendance</a></li>
									<li><a href="{{ URL::to('/') }}/area10/C/10CS_1_12">others <i>(please specify)_______</i></a></li>
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
							<li><a href="">Students are provided opportunities to participate in the planning and implementation of activities concerning their welfare.</a></li>
							<li><a href="">Concerned officials, faculty and staff act promptly on requests, needs and problems of the students.</a></li>
							<li><a href="">The administration, faculty, staff and studdents work harmoniously and maintain good relationship.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/C/10CO_1">The institution has an effective and functional Student Administration.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/C/10CO_2">Policy implementation is efficient.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseD">D. Financial Management</a>
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
							<li><a href="{{ URL::to('/') }}/area10/D/10DS_1">The institution has an approved Financial Development Plan (FDP).</a></li>
							<li><a href="{{ URL::to('/') }}/area10/D/10DS_2">The approved budget is in consonance with the FDP.</a></li>
							<li data-toggle="collapse" href="#sub-parameter7"><a href="">The institution has specific budgetary allotment for the following: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter7" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area10/D/10DS_3_1">personnel services;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DS_3_2">Maintenance and Other Operating Expenses (MOOE)</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DS_3_4">capital outlay</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DS_3_5">special projects</a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/D/10DI_1">The institution maintains a Financial Management Office managed by qualified and competent personnel.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/D/10DI_2">The financial management peronnel are responsible for the efficient management of financial resources/funds of the institution.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/D/10DI_3">The administrative, faculty staff and student representatives participate in the budget preparation and in the procurement program of the institution.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/D/10DI_4">The budget of the institution is fairly and ovjectively allocated.</a></li>
							<li data-toggle="collapse" href="#sub-parameter8"><a href="">The institution allocates funds for the following student services and activities: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter8" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_1">cultural development;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_2">athletic and sports development;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_3">medical and dental services;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_4">library;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_5">student body organization;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_6">guidance and counseling;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_7">improvement of laboratories/shops;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_8">repair and maintenance of facilities and equipment;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_9">purchase of new equipment, supplies and materials;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_10">replacement of old and unserviceable equipment;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_11">construction of new facilities; <i>as needed</i></a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_12">improvement/expansion and community service;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_13">extension and community service;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_14">disaster and risk reduction;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/D/10DI_5_15">auxiliary services.</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area10/D/10DI_6">The budget for specific expenditures indicated in item 1.5 is allocated in consonance woth existing policies and guidelines.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/D/10DO_1">The Institution has a sound and effective financial management system.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseE">E. Supply Management</a>
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
							<li><a href="{{ URL::to('/') }}/area10/E/10ES_1">The institution has an approved procurement management system in consonance with the Revised IRR of RA 9184 (Government Procurement Reform Act).</a></li>
							<li><a href="{{ URL::to('/') }}/area10/E/10ES_2">The institution has a system for proper disposal on non-serviceable and condemned equipment, supplies and materials.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/E/10ES_3">The office has a storeroom for keeping and securing all equipment, supplies and materials purchased.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/E/10EI_1">The insitution maintains a Supply Management Office (SMO) managed by qualified staff with specific functions and responsibilities.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/E/10EI_2">The Bids and awards Committee (BAC) is responsible for the procurement and deliveries of needed equipment, supplies and materials in accordance with the qpproved Annual Procurement Plan (APP) and  Project Procurement Management Plan (PPMP).</a></li>
							<li><a href="{{ URL::to('/') }}/area10/E/10EI_3">The BAC perform its tasks responsibilities in accordance with recent procurement policies and official issuances.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/E/10EI_4">The SMO prepares, evaluates and submits the annual inventory of serviceable and non-serviceable facilities and equipment.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/E/10EI_5">All approved requests for procurement are published with the Philippine Government Electronic Procurement System (PhilGEPS).</a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/E/10EO_1">The institution has an efficient and effective Supply Management System.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/E/10EO_2">All procurement transactions are transparent.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseF">F. Records Management</a>
					</h4>
				</div>
				<div id="collapseF" class="panel-collapse collapse">
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
							<li><a href="{{ URL::to('/') }}/area10/F/10FS_1">The institution has a system of records keeping.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/F/10FS_2">The institution has policies and procedures to ensure the security and confidentiality of records.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/F/10FS_3">Policies and procedures on prompt release of records are in place.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/F/10FI_1">The institution maintains a Records Management Office (RMO) managed by a qualified Records Officer. </a></li>
							<li><a href="{{ URL::to('/') }}/area10/F/10FI_2"> A records system is installed in offices where it allows east access to information needed by concerned parties. </a></li>
							<li><a href="{{ URL::to('/') }}/area10/F/10FI_3">The Human Resource Management Office (HRMO) maintains accurate, up-to-date and systematic records of faculty and staff. </a></li>
							<li data-toggle="collapse" href="#sub-parameter9"><a href="">The following updated record compilations are made available to concerned parties: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter9" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_1">minutes of the Board of Regents/Trustees meetings;</a></li>
									<li><a href="#{{ URL::to('/') }}/area10/F/10FI_4_2">minutes of the faculty meeting e.g. minutes of the Academic Council meetings;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_3">faculty and staff individual files;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_4">faculty and staff performance evaluation results;</a></li>
									<li data-toggle="collapse" href="#sub-parameter10"><a href="#">other records such as <span class="glyphicon glyphicon-chevron-down"></span></a></li>
										<ol id="sub-parameter10" class="panel-collapse collapse">
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_1">student directory;</a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_2">alumni directory;</a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_3">permanent records of students; </a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_4">reports of Director/Dean;</a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_5">annual reports; </a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_6">accomplishment/progress reports; </a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_7">scholarship records; </a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_8">statistical data; </a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_9">financial records of students; </a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_10">inventory of property; </a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_11">proceedings of administrative investigation (if any);</a></li>
											<li><a href="{{ URL::to('/') }}/area10/F/10FI_4_5_12">others <i>(please specify) ______________.</i></a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/F/10FO_1">The institution has a commendable Records Management System.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseG">G. Institutional Planning and Development</a>
					</h4>
				</div>
				<div id="collapseG" class="panel-collapse collapse">
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
							<li><a href="{{ URL::to('/') }}/area10/G/10GS_1">The institution has an approved Strategic Developmental Plan (SDP) available in printed and/or electronic forms.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/G/10GS_2">There is a system of monitoring the implementation of the (SDP).</a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/G/10GI_1">The institution’s Planning and Development Unit plans, monitors and evaluates planned activities/targets.</a></li>
							<li><a href="{{ URL::to('/') }}/area10/G/10GI_2">The planning process is a cooperative and participative endeavour of the administration, the faculty staff and the students. </a></li>
							<li><a href="{{ URL::to('/') }}/area10/G/10GI_3">The SDP is implemented, monitored, evaluated, reviewed, and update regularly. </a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/G/10GO_1">The SDP is congruent with the VMGO as well as with the local, regional and national developmental goals and agenda. </a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseH">H. Performance of Administrative Personnel </a>
					</h4>
				</div>
				<div id="collapseH" class="panel-collapse collapse">
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
							<li data-toggle="collapse" href="#sub-parameter11"><a href="">The institution has an approved performances evaluation system for administrative personnel which includes the following items: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter11" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area10/H/10HS_1_1">competence;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/H/10HS_1_2">quality of work;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/H/10HS_1_3">work ethic (punctuality, wise use of time, etc.);</a></li>
									<li><a href="{{ URL::to('/') }}/area10/H/10HS_1_4">creative ability and innovativeness;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/H/10HS_1_5">ability to handle internal and external pressures;</a></li>
									<li><a href="{{ URL::to('/') }}/area10/H/10HS_1_6">interpersonal relations.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/H/10HI_1">The institution regularly monitors and evaluates the performance of the administrative personnel. </a></li>
							<li data-toggle="collapse" href="#sub-parameter12"><a href="">The results of performance evaluation of the administrative personnel are utilized: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter12" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area10/H/10HI_2_1">to improve performance and delivery of service; </a></li>
									<li><a href="{{ URL::to('/') }}/area10/H/10HI_2_2">for promotion.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area10/H/10HO_1">The administrative personnel/staff have a commendable performance. </a></li>
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