@php
    $label = isset($label) ? $label : null;
    $name = isset($name) ? $name : '';
    $class = isset($class) ? $class : null;
    $value = isset($value) ? $value : null;
    $multiple = isset($multiple) ? $multiple : false;
    $options = isset($options) ? $options : [];

@endphp

<div class="form-group">
    <label for='{{ $name }}'>
        <h5> {{ $label }}</h5>
    </label>
    <select @class([
        'form-select',
        'form-select-lg',
        $class,
        'is-invalid' => $errors->has($name),
        // 'select-multilpe' => $multiple,
    ]) @if ($multiple) multiple @endif
        aria-label="{{ ($multiple ? 'Multiple' : 'Small') . ' select example' }}" id="{{ $name }}"
        @if ($multiple) name="{{ $name }}[]"
         @else
         name="{{ $name }}" @endif>
        @foreach ($options as $k => $v)
            <option @selected($value->contains($k)) value="{{ $k }}"> {{ $v }}</option>
        @endforeach
    </select>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
