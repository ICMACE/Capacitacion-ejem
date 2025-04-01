@extends('layout.app')
@section('title','Test')
@section('content')
<ul>
    <li>1</li>
    <li>2</li>
</ul>    
Variables
<pre>
    @php
     print_r($variables);   
    @endphp
</pre>
@component('components.alert',['name'=>'Miguel'])
    @slot('title') test @endslot
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quam, officiis similique atque delectus animi. Aspernatur repudiandae nobis quo ex. Dolorem ipsum ab expedita excepturi nisi necessitatibus ullam repellat eligendi!</p>
@endcomponent

<x-alert type="success" title="Bienvenido" name="Juan">
    Este es el contenido dentro del slot.
</x-alert>

<x-alert2>
    Este es el contenido dentro del slot del alert 2.
</x-alert2>

<x-anonimo type="success" title="Bienvenido" name="Juan" style="border: 1px solid red;">
    Este es el contenido dentro del slot del componente anonimo.
</x-nonimo>
@endsection