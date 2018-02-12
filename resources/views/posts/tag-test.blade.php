@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel create">
            <div class="panel-heading">Confirm Tags</div>
            <div class="panel-body">

            <form id="inputTags" method="post" class="form-horizontal">

                <div class="form-group">
                    <label class="control-label">Do you want to tag <i>file_name</i> to these areas?</label>
                    <div class="col-xs-12 tag-input">
                        <input type="text" name="cities" class="form-control"
                               value="insert tags" data-role="tagsinput" />
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            </div>  
        </div>
	</div>
</div>
@endsection