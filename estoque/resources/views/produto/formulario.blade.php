@extends('layouts.principal')

@section('conteudo')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="/produtos/adiciona" method="POST">
        <input type="hidden" name="_token" value={{csrf_token()}} />

        <div class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" name="nome" value="{{ old('nome') }}" />
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input class="form-control" type="number" name="valor" value="{{ old('valor') }}" />
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input class="form-control" type="number" name="quantidade" value="{{ old('quantidade') }}" />
        </div>
        <div class="form-group">
            <label for="tamanho">Tamanho</label>
            <input class="form-control" type="text" name="tamanho" value="{{ old('tamanho') }}" />
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input class="form-control" name="descricao" value="{{ old('descricao') }}" />
        </div>

        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>
@stop
