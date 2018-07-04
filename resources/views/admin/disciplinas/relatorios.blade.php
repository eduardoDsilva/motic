@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/disciplinas/home')}}}" class="breadcrumb">Disciplinas</a>
    <a href="{{{route ('admin/disciplinas/relatorios')}}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Relatórios</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os relatórios disponíveis para as disciplinas do sistema!</h5>
            </div>
        </div>
    </div>

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