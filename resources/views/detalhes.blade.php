@extends('principal')

@section('conteudo')
<h1>Detalhes do produto {{$p->nome}}</h1>
<ul>
    <li>
        <b>Valor:</b> R$ {{$p->valor}}
    </li>
    <li>
        <b>Descrição:</b> {{$p->descricao or 'não tem descrição'}}
    </li>
    <li>
        <b>Quantidade em estoque:</b> {{$p->quantidade}}
    </li>
</ul>
@stop
