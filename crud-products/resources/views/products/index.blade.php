@extends('layouts.app')
@section('title', 'Products List')
@section('content')
<h1>Productos</h1>

@include('include.menu')
@include('include.alerts')
{{ session('status') }}
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td scope="row">{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>${{ $product->price }}</td>
                <td>
                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
    