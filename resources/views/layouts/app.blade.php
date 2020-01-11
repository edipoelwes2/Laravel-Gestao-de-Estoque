<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Little One</title>

    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('store.index') }}">LittleOne</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('store.index') }}">Listar Fraldas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('diaper.create') }}">Entrada</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Saida</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>


<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>
