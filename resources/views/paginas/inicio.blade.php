<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ps.Location</title>
    <link rel="stylesheet" href="{{asset('css/initial.css')}}" />


</head>

<body>
    <header>
        <section>
            <picture>
                <img src="{{asset('img/logo.png')}}" alt="Logo" />
            </picture>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/sugestoes') }}" class="sugest">sugestões</a> <!-- Não entendi essa linha!! -->
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar</a>
                @endif
                @endauth
            </div>
            @endif
        </section>
    </header>
    <main>
        <section class="mapa">
            <img src="{{asset('img/mapa.png')}}" alt="mapa" />
            <div class="center">BEM VINDO !</div>
        </section>
    </main>
</body>

</html>