@extends('admin.admin')
@section('title')
    Tous les biens
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Tous les biens</h1>
        <a href="{{ route('admin.property.create') }}" class="btn btn-primary">Ajouter un bien</a>

    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Surface</th>
                <th>Prix</th>
                <th>Ville</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property)
                <tr>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->surface }}</td>
                    <td>{{ number_format($property->price, thousands_separator: ' ') }}</td>
                    <td>{{ $property->city }}</td>
                    <td>
                        {{-- <a href="{{ route('admin.property.show', $property) }}" class="btn btn-info">{{__('buttons.show')}}</a> --}}
                        <div class="d-flex w-100 gap-2 justify-content-end">
                            <a href="{{ route('admin.property.edit', $property) }}"
                                class="btn btn-warning">{{ __('buttons.edit') }}</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" name="deleteBtn"
                                data-bs-target="#deleteModal">
                                {{ __('buttons.delete') }}
                            </button>
                            @include('shared.deleteModal', ['propretyToDelete' => $property])
                            {{-- <a href="{{ route('admin.property.edit', $property) }}"
                                class="btn btn-danger">{{ __('buttons.delete') }}</a> --}}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <div>
            {{ $properties->links() }}
        </div>
    </table>
    {{ $properties->links() }}
@endsection
