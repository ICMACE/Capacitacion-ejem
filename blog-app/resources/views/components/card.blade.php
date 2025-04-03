<div class="card" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title">{{ $title ?? 'Titulo' }}</h5>
        <p class="card-text">{{ $slot }}</p>
        <a href="{{ $urlReturn }}" class="btn btn-primary">Regresar</a>
    </div>
</div>