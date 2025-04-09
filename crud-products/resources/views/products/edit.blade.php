@extends('layouts.app')
@section('title', 'Products Edit')
@section('content')
    <h2>Actualizar producto</h2>
    @include('include.menu')
    <form action="{{ route('product.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name',$product->name) }}" placeholder="Nombre del producto" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="description" id="description" value="{{ old('description',$product->description) }}" placeholder="Descripción del producto" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Precio</label>
            <input type="number" step="0.1" min=1 name="price" id="price" value="{{ old('price',$product->price) }}" placeholder="Precio del producto" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
@endsection