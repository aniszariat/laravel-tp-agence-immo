<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'tp agence immo') | Administration
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
</head>

<body>
    @php
        $route = Request()->Route()->getName();
    @endphp
    {{-- @include('_partials.header') --}}
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('admin.property.index') }}" @class(['nav-link', 'active' => str_contains($route, 'property')])></a>
                Gérer les biens
            </li>
            <li class="nav-item"><a href="{{ route('admin.option.index') }}" @class(['nav-link', 'active' => str_contains($route, 'option')])></a>
                Gérer les options
            </li>
        </ul>
        <div class="ms-auto">
            @auth
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @method('DELETE')
                            <button type="submit">se deconnecter</button>
                        </form>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
    <div class="container fluid mt-5">
        @if (session('status'))
            @include('shared.alert', ['alert' => session('status')])
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="my-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        new TomSelect('select[multiple]', {
            plugins: {
                remove_button: {
                    title: 'supprimer'
                }
            }
        })

        //     plugins: {
        //         remove_button: {
        //             title: 'Remove this item',
        //         }
        //     }
        // })
    </script>
</body>

</html>
