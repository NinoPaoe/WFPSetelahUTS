@extends('layouts.conquer2')
@section('title')
  Daftar Obat
@endsection
@section('content')
<div class="container">
  <h2>Daftar Obat</h2>
  <a href="#" onclick="showInfo()">
  <i class="icon-bulb"></a></i>
  <div id='showinfo'></div>
  <p>Berikut adalah daftar obat:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama Obat</th>
        <th>Formula</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listdata as $li)
      <tr>
        <td>
        <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}" data-toggle="modal">{{ $li->generic_name }}</a>  
        <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">{{$li->generic_name}}</h4>
                </div>
                <div class="modal-body">
                  <img src="{{ asset('img/med/').'/'.$li->image }}" height='200px' />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
             </div>
          </div>
        </div>
        </td>
        <!-- <td>{{ $li -> generic_name }}</td> -->
        <td>{{ $li -> form }}</td>
        <td>{{ $li -> price }}</td>
        <td>
          <a class='btn btn-info' href="{{route('reportShowMedicine',$li->id)}}"
             data-target="#show{{$li->id}}" data-toggle='modal'>detail</a>        
          <div class="modal fade" id="show{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
             <div class="modal-content">
               <!-- put animated gif here -->
             </div>
            </div>
          </div>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
@section('javascript')
<script>
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("obat.showInfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#showinfo').html(data.msg)
    }
  });
}
</script>
@endsection
