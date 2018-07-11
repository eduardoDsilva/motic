@extends('_layouts._app')

@section('titulo','Motic Professor')

@section('breadcrumb')
    <a href="{{{route ('professor')}}}" class="breadcrumb">Home</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Professor</h1>
            <div class="row center">
                <h5 class="header col s12 light">Bem vindo, {{ Auth::user()->name }}!</h5>
            </div>
        </div>
    </div>

    <div class="section container col s12 m6 l8">
        <div class="card-panel">
            <div class="row">
                <a href="{{route ('professor.projeto')}}">
                    <div class="col s12 m6">
                        <div class="card hoverable blue darken-2">
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
                        <div class="card hoverable pink darken-2">
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