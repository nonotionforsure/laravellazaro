<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugestões</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}"><!-- Linkado com o css do cabeçalho -->
</head>

<body>
    <header>
        <section>
            <picture>
                <img src="{{asset('img/logo.png')}}" alt="Logo" />
            </picture>
        </section>
    </header>
    <nav>
        <ul>
            <li>
                <a href="{{url('/inicio')}}">Início</a>
            </li>
            <li>
                <a href="{{url('/acesso')}}">Acesso</a>
            </li>
            <li>
                <a href="{{url('/perfil')}}">Perfil</a>
            </li>
            <li>
                <a href="{{url('/sugestoes')}}">Sugestões</a>
            </li>

        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>