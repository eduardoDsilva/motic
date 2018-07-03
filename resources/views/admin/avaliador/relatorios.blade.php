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
                <div class="col s12 m6">
                    <div class="card red darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos os alunos resumido</span>
                            <p>Para gerar um relatório de todos os alunos do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card green darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Aluno por escola</span>
                            <p>Para gerar um relatório dos alunos de cada escola.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card purple darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos alunos completo</span>
                            <p>Para gerar um relatório de todos os alunos do sistema, com os seguintes dados:</p>
                            <li>Dados pessoais</li>
                            <li>Dados escolares</li>
                            <li>Endereço</li>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card blue darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos alunos completo</span>
                            <p>Para gerar um relatório de todos os alunos do sistema, com os seguintes dados:</p>
                            <li>Dados pessoais</li>
                            <li>Dados escolares</li>
                            <li>Endereço</li>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="">Gerar relatório</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection