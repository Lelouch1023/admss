@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard 
                  <div class="notification" id="notifclass"></div></div>
                <div class="panel-body">
                   <h3><strong>Your blog posts.</strong></h3>
                   <hr>
                   @if(count($posts) > 0)
                       <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th><a href="/post/{{ $post->id }}">{{ $post->title }}</a></th>
                                    @if(Auth::user()->id == $post->user_id)
                                      <th><a href="/post/{{ $post->id }}/edit" class="btn btn-primary">Edit</a></th>
                                      <th> </th>
                                    @endif

                                </tr>
                            @endforeach
                       </table>
                    @else
                        <h5>No posts to yet. <a href='/post/create' class='btn btn-primary'>Create</a> one!.</h5>
                   @endif   
                <button id='notif_butt'>Increment Notificationsssssssssssss</button> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
