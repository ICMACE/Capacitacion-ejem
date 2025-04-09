@extends('layouts.app')
@section('content')
<a class="btn btn-info" href="{{ route('store') }}">Registrar</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td> {{ $user->lastname }}</td>
            <td> {{ $user->email }}</td>
            <td> {{ $user->phone }}</td>
            <td>
                <a href="{{ route('actualizar',$user->id) }}"><button class="btn btn-warning">Actualizar</button></a>
                <a href="{{ route('borrar',$user->id) }}"><button class="btn btn-danger">Eliminar</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<h3>Nombre:</h3><label for="">{{ $u->name }}</label>
<h3>Apellido:</h3><label for="">{{ $u->lastname }}</label>
{{-- <h3>Correo:</h3><label for="">{{ $uMail }}</label> --}}
<h3>Correos:</h3>
<ul>
    @foreach ( $uMail as $mail)
        <li>{{ $mail }}</li>
    @endforeach
</ul>

<pre>
{{--
<span class="label">Total de consult {{ $countU }}</span><br>
<span class="label">Exists {{ $existU }}</span><br>
<span class="label">selectU {{ $selectU }}</span><br>

@php
    print_r($selectUQuery);
@endphp
--}}

</pre>


@endsection