@if (session('success'))
    <x-alert title="Alerta" name="alert" type="success">
        {{ session('success') }}
    </x-alert>
@endif
@if ($errors->any())
    <x-alert title="Alerta" name="alert" type="danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-alert>
@endif
