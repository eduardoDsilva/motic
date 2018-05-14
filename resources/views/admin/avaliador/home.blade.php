@extends('layout.site')

@section('titulo','Motic Admin - Avaliador')

@section('conteudo')

    @if(session('success'))
        {{session('success')}}
    @endif

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">Avaliadores</h1>
            <div class="row center">
                <h5 class="header col s12 light">Bem vindo ao menu de avaliadores!</h5>
            </div>
            <br>
        </div>
    </div>

    <div class="container">
        <div class="col s12 m4 l8">

            <div class="row">
                <a href="{{route ('admin/avaliador/cadastro/registro')}}">
                    <div class="col s12 m4">
                        <div class="card red darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">account_circle</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Cadastrar avaliador</span>

                                <p>Clique aqui para cadastrar os avaliadores do sistema.</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{route ('admin/avaliador/busca/buscar')}}">
                    <div class="col s12 m4">
                        <div class="card blue darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">library_add</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Verificar avaliadores</span>

                                <p>Clique aqui para verificar os avaliadores cadastradas no sistema.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route ('admin/escola/busca/buscar')}}">
                    <div class="col s12 m4">
                        <div class="card green darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">library_add</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Atribuir projeto</span>

                                <p>Clique aqui para atribuir projetos aos avaliadores cadastrados no sistema.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
