@extends('layouts.app')
@section('title', 'Editar tarea')
@section('title-panel','Tareas')
@section('content')
<ul class="nav nav-pills nav-justified" style="margin-bottom: 20px;">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="/">Welcome</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('task.index') }}">Task list</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{ route('task.create') }}">Create task</a>
    </li>
</ul>

<x-panel class="mb-4" titulo="Tareas Pendientes">
    <form action="{{ route('task.update',$task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$task->title) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" value="{{ old('description',$task->description) }}" required>{{ $task->description }}</textarea>
        </div>
        <div class="row">
            <div class="col-md-12" align="center">Due date</div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="due_date_date">Date</label>
                    <input type="date" class="form-control" id="due_date_date" name="due_date_date" value="{{ old('due_date_date',$task->due_date_date) }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="due_date_time">Time</label>
                    <input type="time" class="form-control" id="due_date_time" name="due_date_time" value="{{ old('due_date_time', $task->due_date_time) }}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" @if($task->user_id==$user->id) selected @endif>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group" align="right">
            <button class="btn btn-info" type="sumit">Actualizar tarea</button>
        </div>
    </form>
</x-panel>

@endsection