@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel create">
            <div class="panel-heading">Confirm Tags</div>
            <div class="panel-body">

            
            @if(count($tags) > 0)
                {!! Form::open(['action' => 'TagsController@store', 'id' => 'inputTags', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
                <p>Do you want to tag <i>{{ $filename }}</i> to this/these area/s?</p>
                @foreach($val as $vals)
                <div class="form-group">
                    <label class="control-label">{{ $vals->name }}</label>
                    
                        
                        <div class="col-xs-12 tag-input">
                            <input type="text" name="tags_{{ $vals->area_id }}[]" class="form-control"
                                   value="@foreach($tags as $tagsb)
                                        @if($vals->area_id == $tagsb['area_id'])
                                            {{ $tagsb['parameters'].', ' }}
                                        @endif
                                    @endforeach
                                   " data-role="tagsinput" />
                        </div>
                </div>
                


                @endforeach
                @foreach($tags as $tagsb)
              
                            <input type="hidden" name="area[area][]" value= {{ $tagsb['area_id'] }} />

                            <input type="hidden" name="param[parameter][]" value={{ $tagsb['parameters']}} />   
                                                      
                @endforeach
                            <input type="hidden" name="filename" value="{{ $filename }}"/>

                <div class="form-group pull-right">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            @else
                <center><div><h3><i>No matching tag found. </i></h3></div></center>
                 {!! Form::open(['action' => 'TagsController@move', 'method' => 'POST']) !!}

                 <input type="hidden" name="filename" value="{{ $filename }}">
                <center><button class="btn btn-default">Delete</button>
                {{ Form::submit('Move to Archive', ['class'=>'btn btn-danger']) }} </center>

               {!! Form::close() !!}

            @endif
            </div>  
        </div>
	</div>
</div>
@endsection