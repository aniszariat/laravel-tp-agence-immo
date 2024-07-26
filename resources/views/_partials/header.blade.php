@php
    $url = Request()->route()->getName();
@endphp

{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary"> --}}
{{-- <nav class="navbar navbar-expand-lg bg-primary-subtle"> --}}
<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Agence</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => strpos($url, 'property')]) aria-current="page"
                        href="{{ route('property.index') }}">{{ __('navbar.properties') }}</a>
                </li>

                <li class="nav-item">
                    <a @class(['nav-link', 'active' => strpos($url, 'option')]) aria-current="page"
                        href="{{ route('admin.option.index') }}">{{ __('navbar.options') }}</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('navbar.language') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('translate', 'en') }}">En</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('translate', 'fr') }}">Fr</a></li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">{{ __('buttons.search') }}</button>
            </form>
        </div>
    </div>
</nav>
