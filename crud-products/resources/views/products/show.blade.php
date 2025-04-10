@extends('layouts.app')
@section('title', 'Products Edit')
@section('content')
    @include('include.menu')
    

    <div class="card">
        <div class="card-header">
            <h2>{{ $product->name }}</h2>
        </div>
        <div class="card-body">
            <div class="col-md-12" align="center">
                <h3>Descripción</h3>
                <p>{{ $product->description }}</p>
                <h3>Precio</h3>
                <p>${{ $product->price }}</p>
            </div>
        </div>
    </div>
@endsection