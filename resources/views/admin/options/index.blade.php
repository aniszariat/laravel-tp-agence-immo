@extends('admin.admin')
@section('title')
    Toutes les options
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Toutes les options</h1>
        <a href="{{ route('admin.option.create') }}" class="btn btn-primary">Ajouter une option</a>


    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($options as $option)
                <tr>
                    <td>{{ $option->name }}</td>
                    <td>
                        <div class="d-flex w-100 gap-2 justify-content-end">
                            <a href="{{ route('admin.option.show', $option) }}"
                                class="btn btn-info">{{ __('buttons.show') }}</a>
                            <a href="{{ route('admin.option.edit', $option) }}"
                                class="btn btn-warning">{{ __('buttons.edit') }}</a>
                            <form action="{{ route('admin.option.destroy', $option) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">{{ __('buttons.delete') }}</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <div>
            {{ $options->links() }}
        </div>
    </table>
    {{ $options->links() }}
@endsection
