@foreach($episodes as $episode)
<p><a href="{{url('databases/episode').'/'.$episode->id }}" >{{$episode->name}} ({{$episode->episode}})</a></p>
@endforeach