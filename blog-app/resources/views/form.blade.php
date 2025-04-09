@extends('layouts.app')
@section('content')
<form action="{{ route('save') }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" id="name" placeholder="Nombre" class="form-control mb-2">
    <input type="text" name="lastname" id="lastname" placeholder="Apellido" class="form-control mb-2">
    <input type="email" name="email" id="email" placeholder="Correo" class="form-control mb-2">
    <input type="text" name="phone" id="phone" placeholder="Telefono" class="form-control mb-2">
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
@endsection