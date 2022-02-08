@extends('layouts.app')

@section('container')
  <div class="row">
    <div class="col-3"></div>
  	<div class="col-6">
          <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$location->name}}</h5>
        <p class="card-text">Type: {{$location->type}}</p>
        <p class="card-text">Dimension: {{$location->dimension}}</p>
       <h3>Residents</h3>
        @foreach($location->characters as $r)
        <p><a href="{{url('databases/character').'/'.$r->id}}">{{$r->name}} ({{$r->id}})</a></p>
       @endforeach
    </div>
        </div>
    </div>
  </div>
  
@endsection
