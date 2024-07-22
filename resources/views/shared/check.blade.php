@php
    $label = isset($label) ? $label : null;
    $type = isset($type) ? $type : 'checkbox';
    $role = isset($role) ? $role : null;
    $value = isset($value) ? $value : null;
    $name = isset($name) ? $name : '';
    $class = isset($class) ? $class : null;
@endphp

{{-- <div @class(['form-check', 'form-switch' => $role == 'switch', $class])> --}}
<div @class([
    'form-check',
    'form-group',
    'form-switch' => $role == 'switch',
    $class,
])>
    <input class="form-check-input @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}"
        name="{{ $name }}" @checked(old($name, $value ?? false))
        @isset($role)
        role="{{ $role }}"
    @endisset
        @isset($value)
        value="{{ old($name, $value) }}"
    @endisset
        @isset($name)
        
    @endisset>
    <label class="form-check-label" for="{{ $name }}">
        {{ $label }}
    </label>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>


{{-- 
<!-- Checkbox-->
<div class="form-check">
    <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
    <label class="form-check-label" for="flexCheckDefault">
        Default checkbox
    </label>
</div>

<!-- Switch-->
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" role="switch">
    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
</div> 

!!<!-- Radio-->
<div class="form-check">
    <input class="form-check-input" type="radio" id="flexRadioDefault1" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault1">
        Default radio
    </label>
</div>

--}}
