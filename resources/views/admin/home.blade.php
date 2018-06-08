@extends('layout.site')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
@endsection

@section('conteudo')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Administrador</h1>
            <div class="row center">
                <h5 class="header col s12 light">Bem vindo, {{ Auth::user()->name }}!</h5>
            </div>
        </div>
    </div>

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <a href="{{route ('admin/escola/home')}}">
                    <div class="col s12 m4">
                        <div class="card hoverable red darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">school</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Escolas</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route ('admin/projeto/home')}}">
                    <div class="col s12 m4">
                        <div class="card hoverable blue darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">library_add</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Projetos</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route ('admin/avaliador/home')}}">
                    <div class="col s12 m4">
                        <div class="card hoverable orange darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">contacts</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Avaliadores</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route ('admin/disciplinas/home')}}">
                    <div class="col s12 m4">
                        <div class="card hoverable green darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">note</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Disciplinas</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route ('admin/aluno/home')}}">
                    <div class="col s12 m4">
                        <div class="card hoverable pink darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">person</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Alunos</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route ('admin/professor/home')}}">
                    <div class="col s12 m4">
                        <div class="card hoverable teal darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">person</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Professores</span>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

@endsection
