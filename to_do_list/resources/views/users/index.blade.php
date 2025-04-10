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
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($elements as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-panel>

@endsection