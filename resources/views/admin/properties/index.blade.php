@extends('admin.admin')
@section('title')
    Tous les biens
@endsection

@section('content')
    <div class="d-flex justify-content-between">
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
                    <td>{{ $property->price }}</td>
                    <td>{{ $property->city }}</td>
                    <td><a href="{{ route('admin.property.edit') }}"></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $properties->links() }}
@endsection
