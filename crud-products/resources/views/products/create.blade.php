@extends('layouts.app')
@section('title', 'Products Create')
@section('content')
    <h2>Crear producto</h2>
    @include('components.menu')
    <form action="{{ route('product.store') }}">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Nombre del producto" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="description" id="description" placeholder="Descripción del producto" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Precio</label>
            <input type="number" step="0.1" min=1 name="price" id="price" placeholder="Precio del producto" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection