@extends('layouts.app')

@section('container')
  <div class="row">
    <div class="col-3"></div>
  	<div class="col-6">
          <div class="card">
      <img src="{{$result['image']}}" class="card-img-top" alt="{{$result['image']}}">
      <div class="card-body">
        <h5 class="card-title">{{$result["name"]}}</h5>
        <p class="card-text">Status: {{$result["status"]}}</p>
        <p class="card-text">Species: {{$result["species"]}}</p>
        <p class="card-text">Type: {{$result["type"]}}</p>
       <p class="card-text">Gender: {{$result["gender"]}}</p>
       <p class="card-text">Origin: <a href="{{url(strstr($result['origin']['url'], 'location/'))}}" >{{$result['origin']['name']}}</a></p>
       <p class="card-text">Location: <a href="{{url(strstr($result['location']['url'], 'location/'))}}" >{{$result['location']['name']}}</a></p>
       <h3>Episodes</h3>
       @foreach($result['episode'] as $r)
<p><a href="{{url('episode'). substr($r, 39)}}">Episode {{substr($r, 40)}}</a></p>
       @endforeach

    </div>
        </div>
    </div>
  </div>
  
@endsection
