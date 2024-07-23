@php
    $label = isset($label) ? $label : null;
    $role = isset($role) ? $role : null;
    $value = isset($value) ? $value : null;
    $name = isset($name) ? $name : '';
    $class = isset($class) ? $class : null;
@endphp

<div @class(['form-check', 'form-switch' => $role == 'switch', $class])>
    <input hidden value="0" name="{{ $name }}">
    <input class="form-check-input @error($name) is-invalid @enderror" type="checkbox" id="{{ $name }}"
        name="{{ $name }}" @checked ($value) value="1"
        @if ($role) role="{{ $role }}" @endif>
    <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
