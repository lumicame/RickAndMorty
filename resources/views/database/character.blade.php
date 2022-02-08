@extends('layouts.app')

@section('container')
  <div class="row">
  	@foreach($characters as $result)
		<div class="col-3">
		      <div class="card">
		  <img src="{{$result->image}}" class="card-img-top" alt="{{$result->image}}">
		  <div class="card-body">
		    <h5 class="card-title"><a href="character/{{$result->id}}">{{$result->name}}</a></h5>
		    <p class="card-text">Status: {{$result->status}}</p>
		    <p class="card-text">Species: {{$result->species}}</p>
		    <p class="card-text">Type: {{$result->type}}</p>
		   <p class="card-text">Gender: {{$result->gender}}</p>
		   <p class="card-text">Origin: <a href="{{url('databases/'.strstr($result->origin_url, 'location/'))}}" >{{$result->origin_name}}</a></p>
       <p class="card-text">Location: <a href="@if($result->location){{url('databases/'.strstr($result->location->url, 'location/'))}}@endif" >@if($result->location){{$result->location->name}}@endif</a></p>
		  <button type="button" class="btn btn-primary btn_episode" data-id="{{$result->id}}" >
  Episodes
</button>
		</div>
		    </div>
		</div>
  	@endforeach
    
  </div>
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
    {!! $characters->render() !!}
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Episodios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="content">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
$(document).on('click','.btn_episode',function() {
 var id=$(this).data('id');

$.ajax({
                url: "{{url('databases')}}/character/show/"+id,
                type: "GET",
            success: function(data) {
            $('#content').html(data);
          myModal.show()
          },error : function(xhr, status) {
        alert('a ocurrido un problema, intentalo nuevamente.');
    },
  });
});
    
</script>
@endsection
