@extends('layouts.app')

@section('container')
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
          <div class="card">
      <img src="{{$character->image}}" class="card-img-top" alt="{{$character->image}}">
      <div class="card-body">
        <h5 class="card-title"><a href="databases/character/{{$character->id}}">{{$character->name}}</a></h5>
        <p class="card-text">Status: {{$character->status}}</p>
        <p class="card-text">Species: {{$character->species}}</p>
        <p class="card-text">Type: {{$character->type}}</p>
       <p class="card-text">Gender: {{$character->gender}}</p>
       <p class="card-text">Origin: <a href="{{url('databases/'.strstr($character->origin_url, 'location/'))}}" >{{$character->origin_name}}</a></p>
       <p class="card-text">Location: <a href="@if($character->location){{url('databases/'.strstr($character->location->url, 'location/'))}}@endif" >@if($character->location){{$character->location->name}}@endif</a></p>
      <h3>Episodes</h3>
       @foreach($character->episodes as $r)
<p><a href="{{url('databases/episode').'/'.$r->id}}">{{$r->name}} ({{$r->episode}})</a></p>
       @endforeach
    </div>
        </div>
    </div>
  </div>
  
@endsection
