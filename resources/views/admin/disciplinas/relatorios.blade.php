@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.disciplina')}}" class="breadcrumb">Disciplinas</a>
    <a href="{{route ('admin.disciplina.relatorios')}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

    @section('titulo-header', 'Relatórios disciplinas')

    @section('conteudo-header', 'Esses são os relatórios das disciplinas disponíveis no sistema!')

    @includeIf('_layouts._sub-titulo')

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card small red darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todas disciplinas</span>
                            <p>Para gerar um relatório de todas disciplinas do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small green darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Trabalhos e disciplinas</span>
                            <p>Para gerar um relatório das disciplinas e trabalhos</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Gerar relatório</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection