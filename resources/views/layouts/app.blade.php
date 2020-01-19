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
    @auth()
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 10px;">
            <a class="navbar-brand" href="{{ route('home') }}">LittleOne</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item @if(request()->is('store')) active @endif">
                        <a class="nav-link" href="{{ route('store.index') }}">Listar Fraldas</a>
                    </li>

                    <li class="nav-item @if(request()->is('diaper')) active @endif">
                        <a class="nav-link" href="{{ route('diaper.create') }}">Entrada</a>
                    </li>

                    <li class="nav-item @if(request()->is()) active @endif">
                        <a class="nav-link" href="">Saida</a>
                    </li>
                </ul>
            </div>

            <div class="my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('form.logout').submit();">Sair</a>
                        <form action="{{ route('logout') }}" class="logout" method="post" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    @endauth

    <main class="container">
        @yield('content')
    </main>


<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>
