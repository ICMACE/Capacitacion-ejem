@extends('layouts.app')
@section('title', 'Products List')
@section('content')
<h1>Productos</h1>

@include('components.menu')
@if (session('status'))
    <x-alert title="Alerta" name="alert">
        {{ session('status') }}
    </x-alert>
@endif
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
    