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

    <form action="/login" method="POST">
        <input type="hidden" name="_token" value={{csrf_token()}} />

        <div class="form-group">
            <label for="nome">Email</label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form-group">
            <label for="valor">Senha</label>
            <input class="form-control" type="password" name="password" />
        </div>
        <button class="btn btn-primary" type="submit">Login</button>
    </form>
@stop
