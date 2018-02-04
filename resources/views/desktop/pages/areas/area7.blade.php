
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">AREA 7: Library</div>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseA">A. Adminstration</a>
					</h4>
					</div>
					<div id="collapseA" class="panel-collapse collapse">
					  <div class="panel-body parameter-panel ">
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
								<li><a href="{{ URL::to('/') }}/area7/A/7AS_1">The organizational structure of the library is well-defined.</a></li>
								<li><a href="{{ URL::to('/') }}/area7/A/7AS_2">The development of the library goals and objectives is the responsibility of the library head and staff with the approval of the Head of the institution.</a></li>
								<li><a href="{{ URL::to('/') }}/area7/A/7AS_3">There is a Library Board/Committee which sets library policies, rules and procedures and periodically reviews them. </a></li>
								<li><a href="{{ URL::to('/') }}/area7/A/7AS_4">There is a duly approved and widely disseminated Library Manual or written policies and procedures covering the library’s internal administration and operation</a></li>
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
								<li><a href="{{ URL::to('/') }}/area7/A/7AI_1"> The library develops an explicit statement of its goals and objectives in conformity with the mandate of the institution. </a></li>
								<li data-toggle="collapse" href="#sub-parameter1"><a href="">The library is administered and supervised by: <span class="glyphicon glyphicon-chevron-down"></span></a></li>
									<ol id="sub-parameter1" class="panel-collapse collapse">
										<li><a href="{{ URL::to('/') }}/area7/A/7AI_2_1">a full-time professional licensed librarian</a></li>
										<li><a href="{{ URL::to('/') }}/area7/A/7AI_2_2">at least a master’s degree holder in MS Library and Information Science or MAEd/MA in Library Science. </a></li>
									</ol>
								<li><a href="{{ URL::to('/') }}/area7/A/7AI_3">The Head Libraries directs and supervises the total operation of the library and is responsible for the administration of its resources and services. </a></li>
								<li><a href="{{ URL::to('/') }}/area7/A/7AI_4">The Head Librarian, preferably with an academic rank, actively participates in the academic and administrative activities of the institution. </a></li>
								<li><a href="{{ URL::to('/') }}/area7/A/7AI_5">The annual accomplishments and other reports of the library are promptly submitted to the higher offices concerned.</a></li>
								<li><a href="{{ URL::to('/') }}/area7/A/7AI_6"> A Library Development Plan is prepared in consultation with the institution’s officials and stakeholders. </a></li>
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
						      		<li><a href="{{ URL::to('/') }}/area7/A/7AO_1">The goals and objectives of the Library are satisfactorily attained.</a></li>
						      		<li><a href="{{ URL::to('/') }}/area7/A/7AO_2">The library organizational structure is well-designed and effectively implemented.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseB">B. Administrative Staff</a>
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
							<li data-toggle="collapse" href="#sub-parameter2"><a href="{{ URL::to('/') }}/area7/B/7BS_1"> The library has staff with the following qualifications: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter2" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area7/B/7BS_2_1">BS in Library and Information Science for the College/Academic Unit Library.</a></li>
									<li><a href="{{ URL::to('/') }}/area7/B/7BS_2_2">MS in Library and Information Science or MAED/MA in Library Science for the institution.</a></li>
								</ol>
							<li data-toggle="collapse" href="#sub-parameter3"><a href="">The library meets the required number of qualified and licensed librarians and staff to meets the needs of the school population with the ratio of: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter3" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area7/B/7BS_3_1">one (1) Licensed Librarian with two (2) full time staff for the first 500 – student population</a></li>
									<li><a href="{{ URL::to('/') }}/area7/B/7BS_3_2">one (1) additional full time Professional Librarian with one (1) full time staff for every additional 1,000 students. </a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area7/B/7BS_4">There is a continuing staff development program with the corresponding financial assistance from the institution. </a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/B/7BI_1">The library staff compensation, retirement, and fringe benefits, as well as other privileges, are granted in accordance with existing government laws and institutional policies. </a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/B/7BO_1">The librarians are qualified.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseC">C. Collection Development, Organization and Preservation</a>
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
							<li><a href="{{ URL::to('/') }}/area7/C/7CS_1">There is a written Collection Development Policy.</a></li>
							<li data-toggle="collapse" href="#sub-parameter4"><a href="">There is a core collection of at least: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter4" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area7/C/7CS_2_1">5,000 titles for the Academic Unit Library</a></li>
									<li><a href="{{ URL::to('/') }}/area7/C/7CS_2_2">10,000 titles that support the instruction, research and other programs for an Institution Library.</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area7/C/7CS_3">Twenty percent (20%) of the library holdings are of current edition, i.e. with copyright within the last 5 years.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CS_4">The Non-print, digital and electronic resources are available.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CS_5">There is an integrated library system.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CS_6">There are provisions for the preservation, general care, and un-keep of library resources.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/C/7CI_1">The Collection Development Policy is regularly reviewed and evaluated by the Library Committee. </a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CI_2">The library collection and service support the mission and vision of the institution, goals of the Academic Unit and objectives of the Program.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CI_3">The library provides sufficient research books and materials to supplement the clients’ curricular needs. </a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CI_4">The library maintains an extensive (15% of the total) Filipiana collection.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CI_5">The library provides 3-5 book/journal titles for professional subjects in the major fields of specialization.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CI_6">The collection is organized according to an accepted scheme of classification and standard code of cataloging. </a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CI_7">Regular weeding-out program is conducted to maintain a relevant and updated collection.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CI_8">The quality and quantity of library materials and resources conform with the standards set for a particular academic program. </a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/C/7CO_1">The library core collection is adequate, updated and well-balanced.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/C/7CO_2">The professional books, journals and electronic resources for the program are sufficient.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseD">D. Services and Utilization</a>
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
							<li><a href="{{ URL::to('/') }}/area7/D/7DS_1">The Library has information services pertinent to the institution’s requirements. </a></li>
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
							<li data-toggle="collapse" href="#sub-parameter5"><a href="">The following services/programs are provided: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter5" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_1">functional and interactive library web page</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_2">integrated library system</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_3">on-line public access (OPAC)</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_4">circulation on-line</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_5">computerized cataloging</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_6">inventory reporting</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_7">serials control</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_8">internet searching</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_9">CD-ROM</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_10">online database</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_11">photocopying</a></li>
									<li><a href="{{ URL::to('/') }}/area7/D/7DI_1_12">barcoding</a></li>
								</ol>
							<li><a href="{{ URL::to('/') }}/area7/D/7DI_2">The library opens at least 54 hours per week for the College/Academic Unit or 60 hours per week for the Institution.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/D/7DI_3">The library promotes and disseminates its program through a regular announcement of its new acquisitions of print materials (books, journals, magazines), resources, facilities, and services. </a></li>
							<li><a href="{{ URL::to('/') }}/area7/D/7DI_4">Librarians and staff are available during library hours to assist and provide library services.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/D/7DI_5">Statistical data on the utilization of various resources and services are compiled and used to improve the library collection and operations. </a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/D/7DO_1">The library services are efficiently and effectively provided.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/D/7DO_2">The library users are highly satisfied with library services. </a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseE">E. Physical Set-up and Facilities</a>
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
							<label>Location and site</label>
							<li><a href="{{ URL::to('/') }}/area7/E/7ES_1">The library is strategically located and accessible to students, faculty and other clientele.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/E/7ES_2">The library is systematically planned to allow future expansion.</a></li>
							<label>Space Requirement</label>
							<li><a href="{{ URL::to('/') }}/area7/E/7ES_3">The size of the library meets standard requirements considering present enrolment and future expansion.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/E/7ES_4">The reading room can accommodate at least 10% of the school enrolment at any given time. </a></li>
							<li><a href="{{ URL::to('/') }}/area7/E/7ES_5">Space is provided for print resources as well as work stations for electronic resources. </a></li>
							<li><a href="{{ URL::to('/') }}/area7/E/7ES_6">Space is provided for the librarians’ office, staff room, technical room, etc. </a></li>
							<li><a href="{{ URL::to('/') }}/area7/E/7ES_7">Ramps for the physically disabled are provided. </a></li>
							<label>Furniture and Equipment</label>
							<li><a href="{{ URL::to('/') }}/area7/E/7ES_8">The library meets the required and standard-sized furniture and equipment.</a></li>
							<li data-toggle="collapse" href="#sub-parameter6"><a href="">The follow library furniture and equipment are available: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter6" class="panel-collapse collapse">
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_1">adjustable/movable shelves;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_2">magazine display shelves;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_3">newspaper racks;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_4">standard tables and chairs;</a></li>
									<li><a href="#{{ URL::to('/') }}/area7/E/7ES_9_5">carrels for individual study;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_6">desks and chairs for staff;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_7">charging desk;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_8">dictionary stand;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_9">atlas stand;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_10">bulletin boards and display cabinets;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_11">vertical file cabinets;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_12">book racks;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_13">map stands/cabinets;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_14">cardex/rotadex or any filing equipment for periodical record;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_15">typewriters;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_16">computers with printer;</a></li>
									<li><a href="{{ URL::to('/') }}/area7/E/7ES_9_17"> others <i>(please specify) ________________.</i></a></li>
								</ol>
								<label>Physical Provisions for Reading</label>
								<li><a href="{{ URL::to('/') }}/area7/E/7ES_10">The library is well lighted.</a></li>
								<li><a href="{{ URL::to('/') }}/area7/E/7ES_11">The library is well-ventilated.</a></li>
								<li><a href="{{ URL::to('/') }}/area7/E/7ES_12">The atmosphere is conductive to learning.</a></li>
								<label>Security/Control </label>
								<li><a href="{{ URL::to('/') }}/area7/E/7ES_13">Fire extinguishers and a local fire alarm system are available.</a></li>
								<li><a href="{{ URL::to('/') }}/area7/E/7ES_14">The Library employs a system for security and control of library resources.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/E/7EI_1">IT software and multi-media equipment are utilized.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/E/7EO_1">The environment in the library is conductive to learning.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/E/7EO_2">The library facilities are well-maintained and aesthetically designed.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseF">F. Financial Support</a>
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
							<li><a href="{{ URL::to('/') }}/area7/F/7FS_1">The institution has a regular and realistic budget for the library.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/F/7FI_1"> The Head Librarian and staff, in coordination with other officials of the institution, prepare and manage the annual library budget. </a></li>
							<li><a href="{{ URL::to('/') }}/area7/F/7FI_2">All fees and funds allocated for library resources and services are utilized solely for such purposes and are properly audited.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/F/7FI_3">Other sources of financial assistance are sought. </a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/F/7FO_1">The financial support from fiduciary, supplemental, and external fund is adequate.</a></li>
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
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseG">G. Linkages</a>
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
							<li><a href="{{ URL::to('/') }}/area7/G/7GS_1">The Library is on the mailing list of agencies, foundations, etc., for exchange of publications and other books and journals donations.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/G/7GI_1">Linkages with other institutions and funding agencies are explored and established for purposes of enhancing library facilities and resources.</a></li>
							<li><a href="{{ URL::to('/') }}/area7/G/7GI_2">The library establishes consortia, networking and resource sharing with other institutions and library collaborative activities.</a></li>
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
							<li><a href="{{ URL::to('/') }}/area7/G/7GO_1">Library resource sharing and linkages are well-established.</a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER G -->
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