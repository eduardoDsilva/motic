@extends('_layouts._app')

@section('titulo','Motic Professor')

@section('breadcrumb')
    <a href="{{{route ('professor')}}}" class="breadcrumb">Home</a>
@endsection

@section('content')

    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

@section('titulo-header', 'Professor')

@section('conteudo-header', 'Bem vindo, '.Auth::user()->name)

@includeIf('_layouts._sub-titulo')

    <div class="section container col s12 m6 l8">
        <div class="card-panel">
            <div class="row">
                <a href="{{route ('professor.projeto')}}">
                    <div class="col s12 m6">
                        <div class="card hoverable blue darken-4">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">library_add</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Projeto</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route ('professor.conta')}}">
                    <div class="col s12 m6">
                        <div class="card hoverable pink darken-4">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">person</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Configurações da conta</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection