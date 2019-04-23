@extends('layout.principal')

@section('conteudo')

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

    <form action="/produtos/adiciona" method="POST">
        <input type="hidden" name="_token" value={{csrf_token()}} />

        <div class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" name="nome" />
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input class="form-control" type="number" name="valor" />
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input class="form-control" type="text" name="quantidade" />
        </div>
        <div class="form-group">
            <label for="tamanho">Tamanho</label>
            <input class="form-control" type="text" name="tamanho" />
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10"></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>
@stop
