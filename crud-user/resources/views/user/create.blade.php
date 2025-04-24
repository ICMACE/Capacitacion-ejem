@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link " aria-current="true" href="{{ route('user.index') }}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('user.create') }}">Crear</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Registro de usuarios</h5>
        <br>
        <div class="" align="left">
            <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control @error('title', 'post') is-invalid @enderror" id="name" placeholder="Nombre" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <label style="font-size:12px;color:rgb(85, 85, 85);">*{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Correo</label>
                <input type="text" class="form-control @error('email', 'post') is-invalid @enderror" id="email" placeholder="Correo" name="email"  value="{{ old('email') }}" required>
                @error('email')
                    <label style="font-size:12px;color:rgb(85, 85, 85);">*{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control @error('password', 'post') is-invalid @enderror" id="password" placeholder="Contraseña" name="password" value="{{ old('password') }}" required>
                    @error('password')
                        <label style="font-size:12px;color:rgb(85, 85, 85);">*{{ $message }}</label>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="">Confirma contraseña</label>
                    <input type="password" class="form-control @error('password_confirmation', 'post') is-invalid @enderror" id="password_confirmation" placeholder="Contraseña" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                    @error('password_confirmation')
                        <label style="font-size:12px;color:rgb(85, 85, 85);">*{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection