@extends('base')

@section('content')
    <div class="be-light p-5 mb-5 text-center">
        <div class="container">
            <h1>
                <a href="{{ route('property.index') }}">
                    Agence Immo
                </a>
            </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quia enim ratione impedit eos consequatur
                tempore accusantium voluptatibus fuga architecto facilis, temporibus, magnam, dolorum soluta tempora officia
                incidunt sequi velit.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('properties.card')
                </div>
            @endforeach
        </div>
        <div class="row mt-2">
            <div class="col">{{ $properties->links() }}</div>
        </div>
    </div>
@endsection
