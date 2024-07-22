@extends('admin.admin')

@section('title')
    {{ $option->id ? 'modifier un bien' : 'Ajouer un bien' }}
@endsection
@section('content')
    <h1>
        @yield('title')</h1>
    <form class="vstack gap-2"
        action="{{ $option->id ? route('admin.option.update', $option) : route('admin.option.store') }}" method="post">
        @csrf
        @method($option->id ? 'PATCH' : 'POST')

        <div class="row">

            @include('shared.input', [
                'label' => __('formFields.option name'),
                'name' => 'name',
                'class' => 'col',
                'value' => $option->name,
            ])

            <div class="form-group mt-3">
                <button type="submit" @class(['btn', 'btn-primary' => true])>
                    @if ($option->id)
                        {{ __('buttons.edit') }}
                    @else
                        {{ __('buttons.create') }}
                    @endif
                </button>
            </div>

    </form>
@endsection


{{-- id	title	description	surface	rooms	bedrooms	floor	price	city	address	postal_code	sold	created_at	updated_at --}}
