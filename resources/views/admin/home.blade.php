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
            <a href="{{route ('admin/escola/home')}}">
                <div class="col s12 m4">
                    <div class="card red darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">school</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Escolas</span>

                            <p>Clique aqui para entrar nas opções da escola no sistema.</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{route ('admin/projeto/home')}}">
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


            <a href="{{route ('admin/avaliador/home')}}">
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

            <a href="{{route ('admin/disciplinas/home')}}">
                <div class="col s12 m4">
                    <div class="card green darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">note</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Disciplinas</span>

                            <p>Clique aqui para entrar nas opções de disciplinas no sistema.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin/aluno/home')}}">
                <div class="col s12 m4">
                    <div class="card pink darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">person</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Alunos</span>

                            <p>Clique aqui para entrar nas opções de disciplinas no sistema.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin/professor/home')}}">
                <div class="col s12 m4">
                    <div class="card amber darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">person</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Professores</span>

                            <p>Clique aqui para entrar nas opções de professores no sistema.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin/disciplinas/home')}}">
                <div class="col s12 m4">
                    <div class="card cyan darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">people</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Equipes</span>

                            <p>Clique aqui para entrar nas opções de equipes no sistema.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin/auditoria/home')}}">
                <div class="col s12 m4">
                    <div class="card blue-grey darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">format_list_bulleted</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Auditoria</span>

                            <p>Clique aqui para entrar nas opções de auditoria do sistema.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin/disciplinas/home')}}">
                <div class="col s12 m4">
                    <div class="card teal darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">supervisor_account</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Usuários</span>

                            <p>Clique aqui para entrar nas opções dos usuários no sistema.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
