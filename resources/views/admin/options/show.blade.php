@extends('admin.admin')
@section('title')
    {{ $option->name }}
@endsection

@section('content')
    <div class="card" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
            <h5 class="card-title">{{ $option->name }}</h5>

            <a href="{{ route('admin.option.edit', ['option' => $option->id]) }}" class="btn btn-primary">modifier</a>
            <a href="{{ route('admin.option.index') }}" class="btn btn-primary">retour</a>
        </div>
    </div>
@endsection
