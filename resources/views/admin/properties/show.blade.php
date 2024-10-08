@extends('admin.admin')
@section('title')
    {{ $property->title }}
@endsection

@section('content')
    <div class="card" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
            <h5 class="card-title">{{ $property->title }}</h5>
            <p class="card-text">{{ $property->description }}</p>

            <a href="{{ route('admin.property.edit', ['property' => $property->id]) }}" class="btn btn-primary">modifier</a>
            <a href="{{ route('admin.property.index') }}" class="btn btn-primary">retour</a>
        </div>
    </div>
@endsection
