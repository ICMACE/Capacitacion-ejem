@extends('layouts.app')
@section('title', 'Home')
@section('title-panel','Tareas')
@section('content')

<x-nav-pills>
    <x-nav-pill-link href="/" :active="request()->is('/')">Welcome</x-nav-pill-link>
    <x-nav-pill-link href="{{ route('task.index') }}" :active="request()->routeIs('task.index')">Task list</x-nav-pill-link>
    <x-nav-pill-link href="{{ route('task.create') }}" :active="request()->routeIs('task.create')">Create task</x-nav-pill-link>
</x-nav-pills>


<x-panel class="mb-4" titulo="Tareas Pendientes">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Due date</th>
                <th>Completed</th>
                <th>User</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($elements as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        @if ($task->is_completed==true || $task->is_completed == 1)
                            <i class="fa-solid fa-check" style="font-size:2em; color:green;"></i>
                        @elseif ($task->is_completed==false || $task->is_completed == 0)
                            <i class="fa-solid fa-xmark" style="font-size:2em; color:red;"></i>
                        @endif
                    </td>
                    <td>{{ $task->user->name }}</td>
                    <td>
                        @if ($task->is_completed==true || $task->is_completed == 1)
                            <form action="{{ route('task.incompleted', $task->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Quitar completado</button>
                            </form>
                        @elseif ($task->is_completed==false || $task->is_completed == 0)
                            <form action="{{ route('task.completed', $task->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Completar</button>
                            </form>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-info btn-sm">Editar</a>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-panel>

@endsection