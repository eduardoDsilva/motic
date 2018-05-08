@extends('layout.site')

@section('titulo','Registrar')

@section('conteudo')
    <div class="container">
        <h3 class="center">Registrar</h3>
        <div class="row">
            <form class="" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="input-field">
                    <input type="text" name="name">
                    <label>Nome</label>
                </div>
                <div class="input-field">
                    <input type="text" name="username">
                    <label>Usuário</label>
                </div>
                <select name="tipoUser" class="browser-default">
                    <option value="" disabled selected>Tipo</option>
                    <option value="admin">Admin</option>
                    <option value="avaliador">Avaliador</option>
                    <option value="escola">Escola</option>
                    <option value="projeto">Projeto</option>
                </select>
                <div class="input-field">
                    <input type="email" name="email">
                    <label>E-mail</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password">
                    <label>Senha</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password_confirmation">
                    <label>Confirmar senha</label>
                </div>

                <button class="btn deep-orange">Cadastrar</button>
            </form>
        </div>
    </div>

@endsection