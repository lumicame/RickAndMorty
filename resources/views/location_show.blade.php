@extends('layouts.app')

@section('container')
  <div class="row">
    <div class="col-3"></div>
  	<div class="col-6">
          <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$result["name"]}}</h5>
        <p class="card-text">Type: {{$result["type"]}}</p>
        <p class="card-text">Dimension: {{$result["dimension"]}}</p>
       <h3>Residents</h3>
       @foreach($result['residents'] as $r)
<p><a href="{{url('character').substr($r, 41)}}">Character {{substr($r, 42)}}</a></p>
       @endforeach

    </div>
        </div>
    </div>
  </div>
  
@endsection
