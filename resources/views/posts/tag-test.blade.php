@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel create">
            <div class="panel-heading">Confirm Tags</div>
            <div class="panel-body">
                <form id="TagsInputForm" method="post" class="form-horizontal">
                    <div class="form-group">
                      <label class="control-label">Are these tags for <i>file_name</i>? </label>
                    <div class="col-xs-12">
                      <input type="text" name="tag" class="form-control"
                       value="Hanoi" data-role="tagsinput" />
                    </div>
                    </div>
                </form>
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input id="tag-form-submit" type="submit" class="btn btn-success" value="Save">
            </div>  
        </div>
	</div>
</div>
@endsection