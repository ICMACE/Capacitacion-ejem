@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="true" href="{{ route('user.index') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.create') }}">Crear</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Users</h5>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mail</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $element)
                <tr>
                    <td>{{ $element->name }}</td>
                    <td>{{ $element->email }}</td>
                    <td>
                        <a href="{{ route('user.edit', $element->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('user.destroy', $element->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection