@section('filetables')
			<table id="myTable" class="table table-striped" >
            <thead>
                <tr>
                    <th class="col-xs-5">File Name</th>
					<th class="col-xs-3">Type</th>
					<th class="col-xs-4">Tags</th>
                </tr>
            </thead> 
            <tbody id="table-content" class="view-file">
				@foreach ($files as $file)
            	<tr>
            		<td>
            			<img src="{{ URL::to('/images/pdf-file.png') }}">
						<a href="{{ URL::to('/') }}/uploads/view/{{ $file->id }}">{{$file->dispname}}</a>
						<br>Uploaded by <p>{{ $file->username }}</p>
						<p>{{$file->created_at}}</p>
						
            		</td>
            		<td class="file-type">
						<label>{{ $file->file_type }}</label>
            		</td>
            		<td id="user-date" class="col-xs-4">
						
            			<p>Tags:</p>
						@foreach($tags as $tag)
							@if($file->filename == $tag->file_name)
					
								<a href="{{ URL::to('/') }}/@if($tags[0]->area_id == "area10")
	                			{{ substr($tags[0]->parameter, 2, 2)}}
	           					 @else
	                			{{ substr($tags[0]->parameter, 1, 1)}} @endif/{{ $tag->area_id }}/{{ $tag->parameter }}">{{ $tag->parameter }}</a>&nbsp;
							
							@endif
						@endforeach
					</td>
            	</tr>
            	@endforeach
            	@else
					<center><p>No files.</p></center>
				@endif
            </tbody>
        </table>
    
 @endsection