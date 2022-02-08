@extends('layouts.app')

@section('container')
  <div class="row">
    <div class="col-3"></div>
  	<div class="col-6">
          <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$episode->episode}}
        </h5>
        <p class="card-text">Air date: {{$episode->air_date}}</p>
        <p class="card-text">Name: {{$episode->name}}</p>
       <h3>characters</h3>
       @foreach($episode->characters as $r)
<p><a href="{{url('databases/character').'/'.$r->id}}">{{$r->name}} ({{$r->id}})</a></p>
       @endforeach

    </div>
        </div>
    </div>
  </div>
  
@endsection