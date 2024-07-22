@php
    $label = isset($label) ? $label : null;
    $type = isset($type) ? $type : 'text';
    $name = isset($name) ? $name : '';
    $class = isset($class) ? $class : null;
    $value = isset($value) ? $value : null;
    $rows = isset($rows) ? $rows : 5;
    // $label ?? = null ;
    // $type ??= 'text' ;
    // $name ??= '' ;
    // $class ??= null ;
    // $value ??= null ;
@endphp
<div @class(['from-group', $class])>
    <label for="{{ $name }}">
        <h5>{{ $label }}</h5>
    </label>
    @if ($type == 'textarea')
        <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}"
            class="form-control @error($name) is-invalid @enderror">{{ old($name, $value) }}</textarea>
    @else
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
            class="form-control @error($name) is-invalid @enderror" value="{{ old($name, $value) }}">
    @endif
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
