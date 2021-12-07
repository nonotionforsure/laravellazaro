@extends('paginas.layout')

@section('content')

@if(count($errors) > 0)
<ul class="validator">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form method="POST" action="{{url('clviagem')}}" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="row">
        <label class="col-2" for="user">Usuário</label>
        <select class="col-5" name="user_id" id="user">
            <option></option>
            @foreach($users as $user)
            <option value="{{$user->id}}" @if($user->id==old('user_id')) selected @endif>{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="row">
        <label class="col-2" for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="col-5" value="{{ old('nome') }}" />
    </div>

    <button type="submit" class="button">Salvar</button>

</form>

@endsection