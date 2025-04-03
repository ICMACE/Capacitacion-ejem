@extends('layouts.app')
@section('title', 'Posts')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
        <a href="{{ route('home') }}" class="btn btn-secondary">Regresar a welcome</a>
    </div>
    <div class="justify-content-between align-items-center mb-4">
        @if(isset($success))
        <div class="col-md-12">
            <x-alert type="success" message="Correcto">
                {{ $success }}
            </x-alert>
        </div>
        @endif
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post['id'] }}</td>
                            <td>{{ $post['title'] }}</td>
                            <td>{{ $post['content'] }}</td>
                            <td>
                                <a href="{{ route('posts.show',$post['id']) }}" class="btn btn-info">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection