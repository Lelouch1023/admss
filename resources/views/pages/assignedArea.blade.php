
@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
		  <div class="panel-heading">Area 1: Vision, Mission, Goals and Objectives</div>
		  <div class="panel-body">
		  	<table class="table table-hover">
			    <thead>	
			      <tr>
			        <th>Sub Areas</th>
			      </tr>
			    </thead>
			    <tbody>
			    <tr>
			   		<td>
			   		<div class="panel-group" id="accordion">
					  <div class="panel panel-default">
					    <div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Statement of Vision, Mission, Goals and Objectives
							</a>
						</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
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
						      		<li data-toggle="collapse" href="#sub-parameter"><a href="">Statement of Vision, Mission, Goals and Objectives</a>
						      		</li>
						      		<ol id="sub-parameter" class="panel-collapse collapse">
						      			<li><a href=""> The institution has a system of determining its Vision and Mission</a></li>
						      			<li>The institution</li>
						      		</ol>
						      		<li data-toggle="collapse" href="#sub-parameter2"><a href=""> Dissemination and Acceptability</a></li>
						      		<ol id="sub-parameter2" class="panel-collapse collapse">
						      			<li>The institution</li>
						      			<li>The institution</li>
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

		  			<div class="panel-group" id="accordion">
					  <div class="panel panel-default">
					    <div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Statement of Vision, Mission, Goals and Objectives
							</a>
						</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
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
								<ul class="accrdn">
						      		<li data-toggle="collapse" href="#sub-parameter"><a href="">Statement of Vision, Mission, Goals and Objectives</a>
						      		</li>
						      		<ol id="sub-parameter" class="panel-collapse collapse">
						      			<li><a href=""> The institution</a></li>
						      			<li>The institution</li>
						      		</ol>
						      		<li data-toggle="collapse" href="#sub-parameter2"><a href=""> Dissemination and Acceptability</a></li>
						      		<ol id="sub-parameter2" class="panel-collapse collapse">
						      			<li>The institution</li>
						      			<li>The institution</li>
						      		</ol>
						      	</ul>
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