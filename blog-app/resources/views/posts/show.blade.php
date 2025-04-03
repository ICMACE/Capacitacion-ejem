@extends('layouts.app')
@section('title', 'Posts')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Posts</h1>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Regresar a editor</a>
        <a href="{{ route('home') }}" class="btn btn-secondary">Regresar a welcome</a>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        
        <x-card :title="$posts[0]['title']" :urlReturn="route('posts.index')">
            <p>{{ $posts[0]['content'] }}</p>
        </x-card>
        
    </div>
</div>
@endsection