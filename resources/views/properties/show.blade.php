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
            <form action="" method="post">
                <div class="row">
                    @include('shared.input', [
                        'class' => 'col',
                        'name' => 'firstname',
                        'label' => __('formFileds.firstname'),
                    ])
                    @include('shared.input', [
                        'class' => 'col',
                        'name' => 'lastname',
                        'label' => __('formFileds.lastname'),
                    ])
                </div>
                <div class="row">
                    @include('shared.input', [
                        'class' => 'col',
                        'name' => 'phone ',
                        'label' => __('formFileds.phone'),
                    ])
                    @include('shared.input', [
                        'class' => 'col',
                        'name' => 'mail',
                        'label' => __('formFileds.mail'),
                    ])
                </div>
                @include('shared.input', [
                    'type' => 'textarea',
                    'class' => 'col',
                    'name' => 'message',
                    'label' => 'Message',
                ])
                <button class="btn btn-primary" type="submit">Nous contacter</button>
            </form>
        </div>
    </div>
@endsection
