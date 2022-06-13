@extends('layouts.conquer2')

@section('title')
    Tambah Transaction
@endsection

@section('content')
<form method="POST" action="{{route('transaksi.store')}}" class="form-horizontal">
    @csrf
    <div class="form-body">
        <h3 align='center'>Tambah Transaksi Baru</h3><br>
        <div class="form-group">
            <label class="col-md-3 control-label">Transaction Date</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <input id="transaction_date" name="transaction_date" type="date" class="form-control" placeholder="Transaction Date">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Buyer</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <select id="buyer_id" name="buyer_id">
                        @foreach($dataBuyer as $d)
                            <option value="{{$d->id}}">{{$d->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">User</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <select id="user_id" name="user_id">
                        @foreach($dataUser as $d)
                            <option value="{{$d->id}}">{{$d->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
</form>
@endsection