@extends('layouts.app')
@section('title', 'Users')
@section('title-panel','Usuarios')
@section('content')
<x-nav-pills>
    <x-nav-pill-link href="/" :active="request()->is('/')">Welcome</x-nav-pill-link>
    <x-nav-pill-link href="{{ route('user.index') }}" :active="request()->routeIs('user.index')">User list</x-nav-pill-link>
    <x-nav-pill-link href="{{ route('user.create') }}" :active="request()->routeIs('user.create')">Create user</x-nav-pill-link>
</x-nav-pills>
<x-panel class="mb-4" titulo="Tareas Pendientes">
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group" align="right">
            <button class="btn btn-primary" type="submit">Registrar</button>
        </div>
    </form>
</x-panel>

@endsection