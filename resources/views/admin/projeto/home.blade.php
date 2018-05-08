@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Administrador</h1>
        <div class="row center">
            <h5 class="header col s12 light">Bem vindo, {{ Auth::user()->name }}!</h5>
        </div>
        <br>

    </div>
</div>

<div class="container">
    <div class="col s12 m4 l8">

        <div class="row">
            <a href="{{route ('admin/cadastrar/escola')}}">
                <div class="col s12 m4">
                    <div class="card red darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">school</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Cadastrar projeto</span>

                            <p>Clique aqui para cadastrar projetos no sistema.</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{route ('admin/cadastrar/escola')}}">
                <div class="col s12 m4">
                    <div class="card blue darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">library_add</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Projetos</span>

                            <p>Clique aqui para entrar nas opções dos projetos no sistema.</p>
                        </div>
                    </div>
                </div>
            </a>


            <a href="{{route ('admin/cadastrar/escola')}}">
                <div class="col s12 m4">
                    <div class="card orange darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">contacts</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Avaliadores</span>

                            <p>Clique aqui para entrar nas opções dos avaliadores no sistema.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
