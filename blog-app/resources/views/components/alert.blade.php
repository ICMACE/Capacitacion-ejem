<div class="alert alert-{{ $type ?? 'info' }}" role="alert">
    <strong>{{ $message ?? 'Alerta' }}</strong>
    {{ $slot }}
</div>
