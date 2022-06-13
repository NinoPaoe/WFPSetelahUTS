@extends('layouts.conquer2')
@section('content')
<!-- <div class="container">
  <h2>Add New Supplier</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="textarea" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div> -->

<div class="container">
  <h2>Add New Category</h2>
  <form method="POST" action="{{route('kategori_obat.store')}}">
    <!-- berlaku untuk semua form dengan method post gunakan @csrf -->
    @csrf
    <div class="card-body">
    <div class="form-group">
      <label for="name1">Name</label>
      <input type="name" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="address1">Description</label>
      <textarea class="form-control" rows="4" id="description" name="description" placeholder="Description"></textarea>
    </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
</div>
@endsection