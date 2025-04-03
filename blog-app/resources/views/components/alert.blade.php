<div class="p-4 text-white bg-{{ $type ?? 'blue' }}-500 rounded">
    <strong>{{ $message ?? 'Alerta' }}</strong>
    <div>{{ $slot }}</div>
</div>
