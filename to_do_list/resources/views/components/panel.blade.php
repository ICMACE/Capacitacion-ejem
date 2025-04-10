<div {{ $attributes->merge(['class' => 'card shadow-sm mb-4']) }}>
    <div class="card-header">
        {{ $titulo ?? 'Panel' }}
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
