@extends('layouts.conquer2')

@section('title')
    Tambah Obat
@endsection

@section('content')
<form method="POST" action="{{route('obat.store')}}" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    <div class="form-body">
        <h3 align='center'>Tambah Obat Baru</h3><br>
        <div class="form-group">
            <label class="col-md-3 control-label">Generic Name</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <input id="generic_name" name="generic_name" type="text" class="form-control" placeholder="Generic Name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Form</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input id="form" name="form" type="text" class="form-control" placeholder="Form">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Restriction Formula</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input id="restriction_formula" name="restriction_formula" type="text" class="form-control" placeholder="Restriction Formula">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Price</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input id="price" name="price" type="number" class="form-control" placeholder="Price">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input id="description" name="description" type="text" class="form-control" placeholder="Description">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Category</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <select id="category_id" name="category_id">
                        @foreach($dataCat as $d)
                            <option value="{{$d->id}}">{{$d->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Supplier</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <select id="supplier_id" name="supplier_id">
                        @foreach($dataSup as $d)
                            <option value="{{$d->id}}" ($d->id == $dataMed->category_id ? 'ss' : '')>{{ $d->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input id="image" name="image" type="file" class="form-control" placeholder="Image">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Faskes 1</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input id="faskes1" name="faskes1" type="number" class="form-control" placeholder="Faskes 1">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Faskes 2</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input id="faskes2" name="faskes2" type="number" class="form-control" placeholder="faskes2">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Faskes 3</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input id="faskes3" name="faskes3" type="number" class="form-control" placeholder="Faskes3">
                </div>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
</form>
@endsection