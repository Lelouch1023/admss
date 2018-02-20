@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel create">
            <div class="panel-heading">Confirm Tags</div>
            <div class="panel-body">

            @if(count($tags) > 0)
            	<p>Are these your tags for {{ $filename }}?</p>

                <ul>
                	@foreach($val as $vals)
                    	   <li><p>{{ $vals->name}}</p></li>
                           <ul>
                            @foreach($tags as $tagsb)
                                @if($vals->area_id == $tagsb['area_id'])
                                   
                                    <li><a href="{{ URL::to('/')."/".$vals->area_id  }}" style="color: #333" target="_blank">{{ $tagsb["dot"] }}</a></li>
                                   
                                @endif
                            @endforeach
                        </ul>
                           <br>
                	@endforeach
                </ul>
                {!! Form::open(['action' => 'TagsController@store', 'method' => 'POST']) !!}
                    @foreach($tags as $tagsb)
              
                            <input type="hidden" name="area[area][]" value= {{ $tagsb['area_id'] }} />

                           
                                                      
                    @endforeach
                     @foreach($tags as $tagsb)

                            <input type="hidden" name="param[parameter][]" value={{ $tagsb['parameters']}} />
                                                      
                    @endforeach

                    <input type="hidden" name="filename" value={{ $filename }}>

                    {{ Form::submit('Submit', ['class'=>'btn login-btn']) }}

               {!! Form::close() !!} 
            @else
                <center><div><h3><i>No matching tag found. </i></h3></div></center>
                    <button class="btn btn-danger">Delete</button>
                 {!! Form::open(['action' => 'TagsController@store', 'method' => 'POST']) !!}

                {{ Form::submit('Move to Archive', ['class'=>'btn login-btn']) }}

               {!! Form::close() !!} 
            @endif
            </div>  
        </div>
	</div>
</div>
@endsection