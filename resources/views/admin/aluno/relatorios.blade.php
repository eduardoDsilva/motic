@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/aluno/home')}}}" class="breadcrumb">Alunos</a>
    <a href="{{{route ('admin/aluno/home')}}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Relatórios</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os relatórios disponíveis para os alunos do sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card red darken-3">
                        <div class="card-content white-text">
                            <span class="card-title">Todos os alunos</span>
                            <p>Clique aqui para gerar um relatório de todos os alunos do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a href="{{route ('admin/aluno/relatorios/todosExibe')}}">Exibir</a>
                            <a href="{{route ('admin/aluno/relatorios/todosBaixa')}}">Baixar</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card green darken-3">
                        <div class="card-content white-text">
                            <span class="card-title">Alunos com projeto</span>
                            <p>Clique aqui para gerar um relatório dos alunos com projeto do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Exibir</a>
                            <a href="#">Baixar</a>
                           </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card blue darken-3">
                        <div class="card-content white-text">
                            <span class="card-title">Alunos sem projeto</span>
                            <p>Clique aqui para gerar um relatório dos alunos sem projeto do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Exibir</a>
                            <a href="#">Baixar</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card purple darken-3">
                        <div class="card-content white-text">
                            <span class="card-title">Aluno individual</span>
                            <p>Clique aqui para gerar um relatório de um aluno específico do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Exibir</a>
                            <a href="#">Baixar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection