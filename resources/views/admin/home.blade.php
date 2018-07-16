@extends('_layouts._app')

@section('titulo','Motic')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
@endsection

@section('content')

    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

@section('titulo-header', 'Administrador')

@section('conteudo-header', 'Bem vindo, '.Auth::user()->name)

@includeIf('_layouts._sub-titulo')

<div class="section container col s12 m6 l8">
    <div class="card-panel">
        <div class="row">
            <a href="{{route ('admin.escola')}}">
                <div class="col s12 m6 l4">
                    <div class="card hoverable red darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">school</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Escolas</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin.projeto')}}">
                <div class="col s12 m6 l4">
                    <div class="card hoverable blue darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">library_add</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Projetos</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin.suplente')}}">
                <div class="col s12 m6 l4">
                    <div class="card hoverable pink darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">library_add</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Suplentes</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin.disciplina')}}">
                <div class="col s12 m6 l4">
                    <div class="card hoverable green darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">note</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Disciplinas</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin.aluno')}}">
                <div class="col s12 m6 l4">
                    <div class="card hoverable purple darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">person</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Alunos</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin.professor')}}">
                <div class="col s12 m6 l4">
                    <div class="card hoverable teal darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">person</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Professores</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin.auditoria')}}">
                <div class="col s12 m6 l4">
                    <div class="card hoverable indigo darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">format_list_bulleted</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Auditoria</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('admin.avaliador')}}">
                <div class="col s12 m6 l4">
                    <div class="card hoverable orange darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">contacts</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Avaliadores</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{{ route('logout') }}}">
                <div class="col s12 m6 l4">
                    <div class="card hoverable grey darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">exit_to_app</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Logout</span>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>

@endsection
