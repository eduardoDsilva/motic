@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.auditoria')}}" class="breadcrumb">Alunos</a>
    <a href="{{route ('admin/auditoria/relatorios')}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Relatórios</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os relatórios disponíveis para realizar auditoria do sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card small red darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Registros do sistema</span>
                            <p>Para gerar um relatório de todos os registros do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin/auditoria/relatorios/todos')}}">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small green darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Registros por usuário</span>
                            <p>Para gerar um relatório de todos os registros de cada usuário.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small blue darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Registros por usuário individual</span>
                            <p>Para gerar um relatório de todos os registros de um único usuário.</p>
                        </div>
                        <div class="card-action">
                            <button class="btn" disabled  type="submit">Gerar relatório</button>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l6">
                    <div class="card small purple darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Registros por usuário individual</span>
                            <p>Para gerar um relatório de todos os registros de um único usuário.</p>
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