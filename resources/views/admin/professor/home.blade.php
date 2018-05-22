@extends('layout.site')

@section('titulo','Motic Admin - professor')

@section('conteudo')

    <a class="btn green" href="{{url()->previous()}}">Voltar</a>

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">Professores</h1>
            <div class="row center">
                <h5 class="header col s12 light">Bem vindo ao menu de professores!</h5>
            </div>
            <br>
        </div>
    </div>

    <div class="container">
        <div class="col s12 m4 l8">

            <div class="row">
                <a href="{{route ('admin/professor/cadastro/registro')}}">
                    <div class="col s12 m4">
                        <div class="card red darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">account_circle</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Cadastrar professor</span>

                                <p>Clique aqui para cadastrar professores no sistema.</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{route ('admin/professor/busca/buscar')}}">
                    <div class="col s12 m4">
                        <div class="card blue darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">library_add</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Listar professores</span>

                                <p>Clique aqui para listar os professores cadastrados no sistema.</p>
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
                                <span class="card-title">Atribuir equipe</span>

                                <p>Clique aqui para atribuir uma equipe aos professores do sistema.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
