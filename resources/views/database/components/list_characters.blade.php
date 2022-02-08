@foreach($characters as $character)
<p><a href="{{url('databases/character').'/'.$character->id }}" >{{$character->name}} ({{$character->id}})</a></p>
@endforeach