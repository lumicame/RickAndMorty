@extends('layouts.app')

@section('container')
  <div class="row">
  	 <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Dimension</th>
      <th scope="col">Residents</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($results as $result)
<tr>
  <th scope="row">{{$result["name"]}}</th>
      <td >{{$result["type"]}}</td>
      <td>{{$result["dimension"]}}</td>
      <td><button type="button" class="btn btn-primary btn_episode" data-id="{{$result['id']}}" >
  Residents
</button></td>
    </tr>
    @endforeach
  
  </tbody>
</table>
    
  </div>
  <center>
  	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item @if(!$info['prev']) disabled @endif"><a class="page-link" href="locations{{strstr($info['prev'], '?')}}">Previous</a></li>
    <li class="page-item @if(!$info['next']) disabled @endif"><a class="page-link" href="locations{{strstr($info['next'],'?')}}">Next</a></li>
  </ul>
</nav>
  </center>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Residents</h5>
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
                url: "https://rickandmortyapi.com/api/location/"+id,
                type: "GET",
            success: function(data) {
            $('#content').html("");
            data.residents.forEach(element => $('#content').append('<p><a href="{{url("character")}}'+element+'" > Character '+element.slice(42)
            	+'</a></p>'));
          myModal.show()
          },error : function(xhr, status) {
        alert('a ocurrido un problema, intentalo nuevamente.');
    },
  });
});
    
</script>
@endsection
