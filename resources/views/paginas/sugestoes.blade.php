@extends('paginas.layout')

@section('content')
<h1>Sugestões:</h1>
<div class="grid-container">
    <div class="polaroid">
        <img src="{{asset('img/restaurante.jpg')}}" alt="mapa" width="100%" />
        <div class="container">
            <a href="{{url('/Restaurantes')}}">Restaurantes</a>
        </div>
    </div>

    <div class="polaroid">
        <img src="{{asset('img/hotel.jpg')}}" alt="mapa" width="100%" />
        <div class="container">
            <a href="{{url('/Hoteis')}}">Hotéis</a>
        </div>
    </div>

    <div class="polaroid">
        <img src="{{asset('img/dicas.jpg')}}" alt="mapa" width="100%" />
        <div class="container">
            <a href="{{url('/Dicas')}}">Dicas</a>
        </div>
    </div>
    <div class="polaroid">
        <img src="{{asset('img/documentos.jpg')}}" alt="mapa" width="100%" />
        <div class="container">
            <a href="{{url('/D')}}">Documentos</a>
        </div>
    </div>
    <div class="polaroid">
        <img src="{{asset('img/viagem.jpg')}}" alt="mapa" width="100%" />
        <div class="container">
            <a href="{{url('/clviagem')}}">Montar check-list de viagens</a>
        </div>
    </div>

    <div class="polaroid">
        <img src="{{asset('img/checklist.jpg')}}" alt="mapa" width="100%" />
        <div class="container">
            <a href="{{url('/Chheck-list de paises')}}">Montar check-list de países</a>
        </div>
    </div>
</div>
@endsection