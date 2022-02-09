@extends('layouts.app')

@section('container')
  <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Episode</th>
      <th scope="col">Name</th>
      <th scope="col">Air_date</th>
      
      <th scope="col">Characters</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($results as $result)
<tr>
  <th scope="row">{{$result["episode"]}}</th>
      <td >{{$result["name"]}}</td>
      <td>{{$result["air_date"]}}</td>
      <td><button type="button" class="btn btn-primary btn_episode" data-id="{{$result['id']}}" >
  Characters
</button></td>
    </tr>
    @endforeach
  
  </tbody>
</table>
  	
    
  </div>
  <center>
  	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item @if(!$info['prev']) disabled @endif"><a class="page-link" href="episodes{{strstr($info['prev'], '?')}}">Previous</a></li>
    <li class="page-item @if(!$info['next']) disabled @endif"><a class="page-link" href="episodes{{strstr($info['next'],'?')}}">Next</a></li>
  </ul>
</nav>
  </center>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Characters</h5>
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
                url: "https://rickandmortyapi.com/api/episode/"+id,
                type: "GET",
            success: function(data) {
            $('#content').html("");
            data.characters.forEach(element => $('#content').append('<p><a href="{{url("character")}}/'+element.slice(41)+'" > Character '+element.slice(42)
            	+'</a></p>'));
          myModal.show()
          },error : function(xhr, status) {
        alert('a ocurrido un problema, intentalo nuevamente.');
    },
  });
});
    
</script>
@endsection
