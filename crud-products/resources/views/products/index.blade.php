@extends('layouts.app')
@section('title', 'Products List')
@section('content')
<h1>Productos</h1>
<table style="width: 100%; margin-bottom: 20px;">
    <tr>
        <td><a href="{{ route('product.create') }}" class="btn btn-info">Crear</a></td>
    </tr>
</table>

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
    