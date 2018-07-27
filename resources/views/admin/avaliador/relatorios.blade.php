@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.avaliador')}}" class="breadcrumb">Avaliador</a>
    <a href="{{route ('admin.avaliador.relatorios')}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    @section('titulo-header', 'Relatórios avaliadores')

    @section('conteudo-header', 'Esses são os relatórios dos avaliadores disponíveis no sistema!')

    @includeIf('_layouts._sub-titulo')

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card small red darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Avaliadores e projetos</span>
                            <p>Para gerar um relatório de todos os avaliadores do sistema por projeto</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small green darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Avaliadores e escolas</span>
                            <p>Para gerar um relatório dos avaliadores por escola.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small purple darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos os avaliadores</span>
                            <p>Para gerar um relatório de todos os avaliadores do sistema com os seguintes dados:</p>
                            <li>Dados pessoais</li>
                            <li>Dados escolares</li>
                            <li>Endereço</li>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small blue darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Avaliador específico</span>
                            <p>Para gerar um relatório completo de um avaliador:</p>
                        </div>
                        <div class="card-action">
                            <button class="btn" disabled type="submit">Gerar relatório</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection