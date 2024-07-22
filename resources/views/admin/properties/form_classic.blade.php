@extends('admin.admin')

@section('title')
    {{ $property->id ? 'modifier un bien' : 'Ajouer un bien' }}
@endsection
@section('content')
    <h1>
        @yield('title')</h1>
    <form action="{{ $property->id ? route('edit') : route('store') }}" method="post">
        @csrf
        @method($property->id ? 'PATCH' : 'POST')
        <div class="from-group"><label for="title"></label><input id="title" name="title" type="text"
                class="from-control" value="{{ old('title', $property->title) }}" required>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="from-group"><label for="description"></label><input id="description" name="description" type="text"
                class="from-control" value="{{ old('description', $property->description) }}" required>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="from-group"><label for="surface"></label><input id="surface" name="surface" type="text"
                class="from-control" value="{{ old('surface', $property->surface) }}" required>
            @error('surface')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="from-group"><label for="rooms"></label><input id="rooms" name="rooms" type="text"
                class="from-control" value="{{ old('rooms', $property->rooms) }}" required>
            @error('rooms')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="from-group"><label for="bedrooms"></label><input id="bedrooms" name="bedrooms" type="text"
                class="from-control" value="{{ old('bedrooms', $property->bedrooms) }}" required>
            @error('bedrooms')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="from-group"><label for="floor"></label><input id="floor" name="floor" type="text"
                class="from-control" value="{{ old('floor', $property->floor) }}" required>
            @error('floor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="from-group"><label for="price"></label><input id="price" name="price" type="text"
                class="from-control" value="{{ old('price', $property->price) }}" required>
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="from-group"><label for="city"></label><input id="city" name="city" type="text"
                class="from-control" value="{{ old('city', $property->city) }}" required>
            @error('city')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="from-group"><label for="address"></label><input id="address" name="address" type="text"
                class="from-control" value="{{ old('address', $property->address) }}" required>
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="from-group"><label for="postal_code"></label><input id="postal_code" name="postal_code" type="text"
                class="from-control" value="{{ old('postal_code', $property->postal_code) }}" required>
            @error('postal_code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit">
            @if ($property->id)
                modifier
            @else
                creér
            @endif
        </button>

    </form>
@endsection
