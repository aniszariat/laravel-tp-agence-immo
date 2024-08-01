@extends('base')
@section('title')
    {{ $property->title }}
@endsection

@section('content')
    <div class="container">
        <h1>@yield('title')</h1>
        <h2>{{ $property->title }} pièces - {{ $property->description }} m²</h2>
        <div class="text-primary fw-bold" style="font-size: 4rem;">
            {{ number_format($property->price, thousands_separator: ' ') }}$</div>
        <hr>
        <div class="mt-4">
            <h4>Intéressé par ce bien?</h4>
            {{-- <form action="{{ route('property.contact', $property) }}" method="get"> --}}
            <form action="{{ route('property.contact', $property->id) }}" method="post">
                @csrf
                <div class="row">
                    @include('shared.input', [
                        'class' => 'col',
                        'name' => 'firstname',
                        'label' => __('formFields.firstname'),
                        'value' => 'Fox',
                    ])
                    @include('shared.input', [
                        'class' => 'col',
                        'name' => 'lastname',
                        'label' => __('formFields.lastname'),
                        'value' => 'Ero',
                    ])
                </div>
                <div class="row">
                    @include('shared.input', [
                        'class' => 'col',
                        'name' => 'phone ',
                        'label' => __('formFields.phone'),
                        'value' => '1234',
                    ])
                    @include('shared.input', [
                        'class' => 'col',
                        'name' => 'mail',
                        'label' => __('formFields.mail'),
                        'value' => 'test@example.com',
                    ])
                </div>
                @include('shared.input', [
                    'type' => 'textarea',
                    'class' => 'col',
                    'name' => 'message',
                    'label' => 'Message',
                    'value' =>
                        'Maison d\'hote pièces - Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user. Thankfully',
                ])
                <button class="btn btn-primary mt-2" type="submit">Nous contacter</button>
            </form>
        </div>
    </div>
@endsection
