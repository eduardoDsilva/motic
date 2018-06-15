@extends('layouts.app')

@section('titulo','Login')

@section('content')
    <div class="container">
        <h3 class="center">Entrar</h3>
        <div class="row">
            <form class="" action="{{route('login')}}" method="post">

                <div class="input-field">
                    <input type="text" name="email">
                    <label>Usuário/E-mail</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password">
                    <label>Senha</label>
                </div>

                {{csrf_field()}}

                <button class="btn deep-orange">Entrar</button>



            </form>
        </div>
    </div>

@endsection