@extends('base')
@section('title')
    Tous les biens
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <h1>Tous les biens</h1>

    </div>

    <div class="gb-light p5 mb-5 text-center">
        <form class="container d-flex gap-2" method="get">
            <input type="number" placeholder="Budget max" class="form-control" name="price"
                value="{{ $input['price'] ?? '' }}">
            <input type="number" placeholder="Surface min" class="form-control" name="surface"
                value="{{ $input['surface'] ?? '' }}">
            <input type="number" placeholder="nbr de pièces min" class="form-control" name="rooms"
                value="{{ $input['rooms'] ?? '' }}">
            <input type="text" placeholder="title or description" class="form-control" name="text"
                value="{{ $input['text'] ?? '' }}">
            <button type="submit" class="btn btn-outline-success">{{ __('buttons.search') }}</button>
        </form>
    </div>
    <div class="container">
        <div class="row">
            @forelse ($properties as $property)
                <div class="col-4 mb-4">
                    @include('properties.card')
                </div>
            @empty
                <div class="col">
                    @include('shared.alert', ['alert' => 'aucun bien!'])
                </div>
            @endforelse
        </div>
        <div class="row mt-2">
            <div class="col">{{ $properties->links() }}</div>
        </div>
        <a href="{{ route('property.index') }}" class="btn btn-primary">retour</a>
    </div>
@endsection
