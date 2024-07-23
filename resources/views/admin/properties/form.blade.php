@extends('admin.admin')

@section('title')
    {{ $property->id ? 'modifier un bien' : 'Ajouer un bien' }}
@endsection
@section('content')
    <h1>
        @yield('title')</h1>
    <form class="vstack gap-2"
        action="{{ $property->id ? route('admin.property.update', $property) : route('admin.property.store') }}"
        method="post">
        @csrf
        @method($property->id ? 'PATCH' : 'POST')

        <div class="row">

            @include('shared.input', [
                'label' => __('formFields.title'),
                'name' => 'title',
                'class' => 'col',
                'value' => $property->title,
            ])
            <div class="col row">
                @include('shared.input', [
                    'label' => __('formFields.surface'),
                    'name' => 'surface',
                    'type' => 'number',
                    'class' => 'col',
                    'value' => $property->surface,
                ])
                @include('shared.input', [
                    'label' => __('formFields.price'),
                    'name' => 'price',
                    'type' => 'number',
                    'class' => 'col',
                    'value' => $property->price,
                ])

            </div>
        </div>
        @include('shared.input', [
            'label' => __('formFields.description'),
            'name' => 'description',
            'type' => 'textarea',
            'class' => 'col',
            'value' => $property->description,
        ])
        <div class="row">
            @include('shared.input', [
                'label' => __('formFields.rooms'),
                'name' => 'rooms',
                'type' => 'number',
                'class' => 'col',
                'value' => $property->rooms,
            ])
            @include('shared.input', [
                'label' => __('formFields.bedrooms'),
                'name' => 'bedrooms',
                'type' => 'number',
                'class' => 'col',
                'value' => $property->bedrooms,
            ])
            @include('shared.input', [
                'label' => __('formFields.floor'),
                'name' => 'floor',
                'type' => 'number',
                'class' => 'col',
                'value' => $property->floor,
            ])

        </div>
        <div class="row">

            @include('shared.input', [
                'label' => __('formFields.city'),
                'name' => 'city',
                'class' => 'col',
                'value' => $property->city,
            ])
            @include('shared.input', [
                'label' => __('formFields.address'),
                'name' => 'address',
                'class' => 'col',
                'value' => $property->address,
            ])
            @include('shared.input', [
                'label' => __('formFields.postal_code'),
                'name' => 'postal_code',
                'class' => 'col',
                'value' => $property->postal_code,
            ])

        </div>
        @include('shared.check', [
            'label' => __('formFields.sold'),
            'role' => 'switch',
            'value' => $property->sold,
            'name' => 'sold',
            // 'class' => '',
        ])
        @include('shared.select', [
            'label' => __('formFields.options'),
            'value' => $property->options()->pluck('id'),
            'name' => 'options',
            'multiple' => true,
            'options' => $options,
        ])

        <div class="form-group mt-3">
            <button type="submit" @class(['btn', 'btn-primary' => true])>
                @if ($property->id)
                    {{ __('buttons.edit') }}
                @else
                    {{ __('buttons.create') }}
                @endif
            </button>
        </div>

    </form>
@endsection


{{-- id	title	description	surface	rooms	bedrooms	floor	price	city	address	postal_code	sold	created_at	updated_at --}}
