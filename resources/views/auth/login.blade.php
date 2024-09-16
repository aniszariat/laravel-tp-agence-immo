@extends('base')
@section('title')
    se connecter
@endsection
@section('content')
    <div class="container">
        <form class="vstack gap-3" action="{{ route('doLogin') }}" method="post">
            @csrf
            @include('shared.input', [
                'class' => 'col',
                'name' => 'email',
                'label' => 'Email',
                'type' => 'email',
            ])
            @include('shared.input', [
                'class' => 'col',
                'name' => 'password',
                'label' => 'password',
                'type' => 'password',
            ])
            <div class="form-group">
                <button class="btn btn-primary" type="submit">se connecter</button>
            </div>
        </form>
    </div>
@endsection
