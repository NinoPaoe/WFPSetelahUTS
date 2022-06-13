@extends('layouts.conquer2')
@section('title')
  Daftar Obat
@endsection
@section('content')
<div class="container">
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
  @endif
  <h2>Daftar Supplier</h2>
  <a href="#" onclick="showInfo()">
  <i class="icon-bulb"></a></i>
  <div id='showinfo'></div>
  <p>Berikut adalah daftar supplier obat:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Logo</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $li)
      <tr>
        <td>{{ $li -> id }}</td>
        <td class="editable" id="td_name_{{$li->id}}">{{ $li -> name }}</td>
        <!-- <td>{{ $li -> generic_name }}</td> -->
        <td class="editable" id="td_address_{{$li->id}}">{{ $li -> address }}</td>
        <td><img src="{{ asset('images/').'/'.$li->logo }}" height="75px"/></td>

        <div class="modal fade" id="modalChange_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" >
              <div class="modal-body">
              <!-- the  new supplier form goes here -->
                <form enctype="multipart/form-data" role = "form" method="POST" action="{{url('supplier.changeLogo')}}">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Change Logo</h4>
                  </div>
                  <div class="form-body">
                    @csrf
                    <div class="form-group">
                      <label>Logo</label>
                      <input type="file" class="form-control" id="logo" name="logo"/>
                      <input type="hidden" id="id" name="id" value="{{$li->id}}"/>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="form-actions">
                      <button type="submit" class="btn btn-info">Submit</button>
                      <a href="{{url('suppliers')}}" class="btn btn-default" data-dismiss="modal">Cancel</a> 
                    </div>  
                  </div>
                </form>
              </div>
            </div>
          </div>
          <br><a href="#modalChange_{{$li->id}}" data-toggle='modal' class="btn btn-xs btn-default">change</a>
        </div>
        <td>
          <a href="{{ url('suppliers/'.$li->id.'/edit')}}" class="btn btn-xs btn-info">edit</a>
          <a href="#modalEdit" data-toggle = 'modal' class="btn btn-warning btn-xs" onclick="getEditForm({{$li->id}})">
            + Edit A
          </a>
          <a href="#modalEdit" data-toggle = 'modal' class="btn btn-warning btn-xs" onclick="getEditForm2({{$li->id}})">
            + Edit B
          </a>
          @can('delete-permission', $li)
            <form method="POST" action="{{url('suppliers/'.$li->id)}}">
              @csrf
              @method('DELETE')
              <input type="submit" value="delete" class="btn btn-danger btn-xs" onclick="if(!confirm('are you sure to delete this record ?')) return false;" />
            </form>
          @endcan
        </td>
      </tr>
        @endforeach
    </tbody>
    <a href="#modalCreate" data-toggle='modal' class="btn btn-info">
    + Supplier Baru (modal)
    </a>
  </table>
</div>
<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content" >
    <div class="modal-header">
      <button type="button" class="close" 
        data-dismiss="modal" aria-hidden="true"></button>
      <h4 class="modal-title">Add New Supplier</h4>
    </div>
    <div class="modal-body">
    <!-- the  new supplier form goes here -->
      <form enctype="multipart/form-data" role = "form" method="POST" action="{{url('suppliers')}}">
        @csrf
        <div class="form-body">
          <div class="form-group">
            <label for="name1">Name</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="address1">Address</label>
            <input type="textarea" class="form-control" id="address" name="address" placeholder="Address">
          </div>
          <div class="form-group">
            <label>Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-actions">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{url('suppliers')}}" class="btn btn-default" data-dismiss="modal">Cancel</a> 
          </div>  
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modalContent">

    </div>
  </div>
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

function getEditForm(id){
  $.ajax({
    type:'POST',
    url:'{{route("suppliers.getEditForm")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id
        },
    success: function(data){
      $('#modalContent').html(data.msg)
    }
  });
}

function getEditForm2(id){
  $.ajax({
    type:'POST',
    url:'{{route("suppliers.getEditForm2")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id
        },
    success: function(data){
      $('#modalContent').html(data.msg)
    }
  });
}

function saveDataUpdateTD(id){
  var eName=$('eName').val();
  var eAddress=$('eAddress').val();
  $.ajax({
    type:'POST',
    url:'{{route("supplier.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id,
          'name':eName,
          'address':eAddress
        },
    success: function(data){
      
    }
  })
}
$('.editable').editable({
        closeOnEnter :true,
        callback:function(data){
            if(data.content){
                alert(data.content);
                var id_data = data.$el[0].id;
                var field = id_data.split('_')[1];
                var id = id_data.split('_')[2];

                $.post('{{ route("suppliers.saveDataField")}}',{
                    _token: "<?php echo csrf_token() ?>",
                    id:id,
                    field:field,
                    value:data.content
                },
                function(data){
                    alert(data.msg);
                });
            }
        }
    });

</script>
@endsection
