@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel upload-panel">
            <div class="panel-heading">Confirm Tags</div>
            <div class="panel-body">

            @if(count($tags) > 0)
            	<p>Are these your tags for {{ $filename }}?</p>

                <ul>
                	@foreach($val as $vals)
                    	   <li><p>{{ $vals->name}}</p></li>
                           <ul>
                            @for($i=0; $i<count($tags); $i++)
                                @if($vals->area_id == $tags[$i]['area_id'])
                                    <li><a href="{{ URL::to('/')."/".$vals->area_id  }}" style="color: #333">{{ $paramnames[$i]}}</a></li>
                                @endif
                            @endfor
                        </ul>
                           <br>
                	@endforeach
                </ul>
                {!! Form::open(['action' => 'TagsController@store', 'method' => 'POST']) !!}
                    @foreach($tags as $tagsb)
              
                            <input type="hidden" name="area[area][]" value= {{ $tagsb['area_id'] }} />

                           
                                                      
                    @endforeach
                     @foreach($tags as $tagsb)

                            <input type="hidden" name="param[parameter][]" value={{ $tagsb['parameter']}} />
                                                      
                    @endforeach

                    <input type="hidden" name="filename" value={{ $filename }}>

                    {{ Form::submit('Submit', ['class'=>'btn login-btn']) }}

               {!! Form::close() !!} 
            @else
                <center><div><h3><i>No matching tag found.</i></h3></div></center>

                 {!! Form::open(['action' => 'TagsController@store', 'method' => 'POST']) !!}
                 <button class="btn btn-danger">Delete</button>
                {{ Form::submit('Submit', ['class'=>'btn login-btn']) }}

               {!! Form::close() !!} 
            @endif
            </div>  
        </div>
	</div>
</div>
@endsection