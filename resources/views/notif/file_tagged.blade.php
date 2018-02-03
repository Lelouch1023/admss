<a href="{{ URL::to('/').'/'.$notification->data['area'].'/'.$notification->data['paramletter'].'/'.$notification->data['parameter'] }}"><strong>{{ $notification->data['user']['name'] }}</strong> has tagged <strong>{{ $notification->data['file'] }}</strong> on your Area. <b>(

	@if($notification->data['area'] == "area10")
               {{  preg_replace('/[^A-Za-z0-9]/', '.', substr($notification->data['parameter'], 3, strlen($notification->data['parameter']))) }}
    @else
             {{ preg_replace('/[^A-Za-z0-9]/', '.', substr($notification->data['parameter'], 2, strlen($notification->data['parameter']))) }}
    @endif
 )</b></a>

