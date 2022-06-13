@extends('layouts.frontend')

@section('title', 'Products')

@section('content')

    <div class="container products">

        <div class="row">
        @foreach($medicine as $medic)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('img/med/'.$medic->image)}}" width="500" height="300">
                    <div class="caption">
                        <h4>{{ $medic->generic_name}}</h4>
                        <p>{{ Str::limit(strtolower($medic->description), 50) }}</p>
                        <p><strong>Price: </strong> Rp. {{ $medic->price }}</p>
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$medic->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endforeach
        </div><!-- End row -->

    </div>

@endsection