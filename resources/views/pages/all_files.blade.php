		
@extends('layouts.app')
		
@section('content')
<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="categories">
			<div class="category-title">
				<label>All Files</label>
			</div>
			<!-- Category contents -->
			<div class="category-content">
			@if(count($files) > 0)
				<div class="col-xs-3 dropdown-file pull-left">
						<select class="form-control" id="doctype" name="doctype">
							<option value="Memorandum">Memorandum</option>
						    <option value="Office Order">Office Orders</option>
						    <option value="TUP Orders">TUP Orders</option>
						    <option value="Certificates">Certicates</option>
							<option value="Researches">Researches</option>
							<option value="Grade Sheets">Grade Sheets</option>
						</select>
				</div>
				<div class="col-xs-4 pull-right">
						<div id="custom-search-input">
				          <div class="input-group ">
				                    <input type="text" class="search-query form-control" placeholder="Search a file" id="searchItem" name="searchItem"/>
				            <span class="input-group-btn">
				            <button class="btn btn-danger" type="button">
				              <span class="glyphicon glyphicon-search" style="color: #000;" aria-hidden="true"></span>
				            </button>
				            </span>
				          </div>
				        </div>
				</div>
			<table id="myTable" class="table table-striped" >
            <thead>
                <tr>
                    <th class="col-xs-5">File Name</th>
					<th class="col-xs-3">Type</th>
					<th class="col-xs-4">Modified</th>
                </tr>
            </thead> 
            <tbody id="table-content" class="view-file">
				@foreach ($files as $file)
            	<tr>
            		<td>
            			<img src="{{ URL::to('/images/pdf-file.png') }}">
						<a href="{{ URL::to('/') }}/uploads/view/{{ $file->id }}">{{$file->name}}</a>
						<p>Tags: 

						</p>
            		</td>
            		<td class="file-type">
						<label>{{ $file->file_type }}</label>
            		</td>
            		<td id="user-date" class="col-xs-4">
						<label>{{ Auth::user()->name }}</label>
						<p>{{$file->created_at}}</p>
					</td>
            	</tr>
            	@endforeach
            	@else
					<center><p>No files.</p></center>
				@endif
            </tbody>
        </table>
			</div><!-- End of category content -->
			{{ $files->links() }}
		</div><!-- End of category -->
	</div><!-- End of column -->
</div><!-- End of container -->

<script type="text/javascript">
	 
</script>
@endsection