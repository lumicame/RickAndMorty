@extends('layouts.app')

@section('container')
  <div class="row">
    <div class="col-3"></div>
  	<div class="col-6">
          <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$result["episode"]}}
        </h5>
        <p class="card-text">Air date: {{$result["air_date"]}}</p>
        <p class="card-text">Name: {{$result["name"]}}</p>
       <h3>characters</h3>
       @foreach($result['characters'] as $r)
<p><a href="{{url('character').substr($r, 41)}}">Character {{substr($r, 42)}}</a></p>

       @endforeach

    </div>
        </div>
    </div>
  </div>
  
@endsection