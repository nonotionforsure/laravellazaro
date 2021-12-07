@extends('paginas.layout')

@section('content')
<a>Adicione o nome dos items que deseja levar para viagem:</a>
<br><br><br> <br>

<table>
    <thead>
        <tr>
            <th>Items</th>
            <th class="but1">Editar</th>
            <th class="but2">Remover</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clviagem as $clviagem)
        <tr>
            <td>{{$clviagem->nome}}</td>
            <td>
                <a href="{{route('clviagem.edit',$clviagem->id)}}" class="button">
                    <!-- esse viagem.edit é assim pq foi oq eu usei no web.php e o $viagem é o que eu usei em cima -->
                    Editar
                </a>
            </td>
            <td>
                <form method="POST" action="{{route('clviagem.destroy',$clviagem->id)}}" onsubmit="return confirm('tem certeza?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button">
                        Remover
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br><br>
<a href="{{url('clviagem/create')}}" class="button">Adicionar</a>
@endsection