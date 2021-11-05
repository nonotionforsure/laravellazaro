@extends('paginas.layout')

@section('content')
<h1>Sugestões:</h1>
<ul>
    <li> <a href="{{url('/Hoteis')}}">Hotéis</a></li>
    <li> <a href="{{url('/Pontos turisticos')}}">Pontos turísticos</a></li>
    <li> <a href="{{url('/Restaurantes')}}">Restaurantes</a></li>
    <li> <a href="{{url('/Documentos')}}">Documentos</a></li>
    <li> <a href="{{url('/Dicas')}}">Dicas</a></li>
    <li> <a href="{{url('/Montar check-list da viagem')}}">Montar check-list da viagem</a></li>
    <li> <a href="{{url('/Chheck-list de paises')}}">Montar check-list de países</a></li>
</ul>

@endsection