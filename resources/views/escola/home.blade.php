@extends('_layouts._app')

@section('titulo','Motic Escola')

@section('breadcrumb')
    <a href="{{{route ('escola')}}}" class="breadcrumb">Home</a>
@endsection

@section('content')

    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

@section('titulo-header', 'Escola')

@section('conteudo-header', 'Bem vindo, '.Auth::user()->name)

@includeIf('_layouts._sub-titulo')

    <div class="section container col s12 m6 l8">
        <div class="card-panel">
            <div class="row">
                <a href="{{route ('escola.projeto')}}">
                    <div class="col s12 m6 l6">
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
                <a href="{{route ('escola.aluno')}}">
                    <div class="col s12 m6 l6">
                        <div class="card hoverable purple darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">person</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Alunos</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route ('escola.professor')}}">
                    <div class="col s12 m6 l6">
                        <div class="card hoverable green darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">person</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Professores</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route ('escola.suplente')}}">
                    <div class="col s12 m6 l6">
                        <div class="card hoverable red darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">library_add</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Suplentes</span>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

@endsection