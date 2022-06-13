      <form role = "form" method="POST" action="{{url('suppliers/'.$data->id)}}">
        <div class="modal-header">
          <button type="button" class="close" data-dissmiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">Edit Supplier</h4>
        </div>
        <div class="modal-body">
          @csrf
          @method('PUT')
          <div class="form-body">
            <div class="form-group">
              <label for="name1">Name</label>
              <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$data->name}}">
            </div>
            <div class="form-group">
              <label for="address1">Address</label>
              <textarea class="form-control" rows="3" id="address" name="address">{{$data->address}}</textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-actions">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{url('suppliers')}}" class="btn btn-default" data-dismiss="modal">Cancel</a> 
          </div>  
        </div>
      </form>