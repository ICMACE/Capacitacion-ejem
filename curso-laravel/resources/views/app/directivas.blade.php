<h2>Directivas</h2>

@if ($num==7)
    SIGNIFICA QUE LA VARIABLE $num {{ $num }} ES IGUAL A 7    
@elseif ($num<7)
    SIGNIFICA QUE LA VARIABLE $num {{ $num }} ES MENOR A 7
@elseif ($num>7)
    SIGNIFICA QUE LA VARIABLE $num {{ $num }} ES MAYOR A 7
@endif

@isset($data)
    <h3>La variable existe:</h3>{{$data}}    
@endisset

@empty($data)
    <h3>Valor vacio</h3>
@endempty

<hr>
<ul>
@for( $i=0; $i<count($names); $i++)
    <li>El nombre es: {{$names[$i]}}</li>
@endfor
</ul>

<ul>
@foreach ($names as $item)
    <li>El nombre es: {{$item}}</li>
@endforeach
</ul>
<ul>
    @forelse ($names as $item)
    <li>El nombre es: {{$item}}</li>
    @empty
    <li>Sin elementos</li>
    @endforelse
</ul>