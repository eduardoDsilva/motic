@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/avaliador/home')}}}" class="breadcrumb">Avaliador</a>
    <a href="{{{route ('admin/avaliador/relatorios')}}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Relatórios</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os relatórios disponíveis para os avaliadores do sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card small red darken-3 hoverable">
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
                    <div class="card small green darken-3 hoverable">
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
                    <div class="card small purple darken-3 hoverable">
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
                    <div class="card small blue darken-3 hoverable">
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