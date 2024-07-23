<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a
                href="{{ route('property.show', ['slug' => $property->getSlug($property->title), 'property' => $property]) }}">
                {{ $property->title }}
            </a>
        </h5>
        <p class="card-text">{{ $property->description }}</p>

        <p class="text-primary">{{ $property->surface }} m² <span
                class="badge text-bg-warning">{{ number_format($property->price, thousands_separator: ' ') }}£</span></p>
        {{-- <a href="{{ route('admin.property.edit', ['property' => $property->id]) }}" class="btn btn-primary">modifier</a>
        <a href="{{ route('admin.property.index') }}" class="btn btn-primary">retour</a> --}}
    </div>
</div>
