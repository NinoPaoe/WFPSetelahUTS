@extends('layouts.conquer2')
@section('title')
  Daftar Kategori Obat
@endsection
@section('content')
<div class="container">
  <h2>Kategori</h2>
  <p>Daftar kategori:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Deskripsi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listdata as $li)
      <tr>
        <td><a href="{{ url('kategori_obat/'.$li->id.'/edit')}}" class="btn btn-xs btn-info">edit</a></td>
        <td>{{ $li -> name }}</td>
        <td>{{ $li -> description }}</td>
        <td>
          <a class='btn btn-xs btn-info' data-toggle='modal' data-target='#myModal'onclick='showProducts({{ $li->id }})'>Show medicines</a>
          <ul>
            @foreach($li->medicines as $lim)
              <li>{{$lim->generic_name}}</li>
            @endforeach
          </ul>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
<div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog modal-wide">
     <div class="modal-content" id="showproducts">
       <!--loading animated gif can put here-->
        <div class="modal-header">
          <h4 class="modal-title">Detail medicines</h4>
        </div>
        <div class="modal-body">
          <img src="{{asset('conquer2/img/ajax-modal-loading.gif')}}" alt="" class="loading">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
  </div>
</div>
@section('javascript')
<script>
function showProducts(category_id)
{
  $.ajax({
    type:'POST',
    url:'{{route("category.showProducts")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'category_id':category_id
         },
    success: function(data){
       $('#showproducts').html(data.msg)
    }
  });
}
</script>
@endsection

