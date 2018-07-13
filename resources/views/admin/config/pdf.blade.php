@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.config.pdf')}}" class="breadcrumb">PDF's</a>
@endsection

@section('content')
    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

@section('titulo-header', "PDF's")

@section('conteudo-header', "Esses são os PDF's disponíveis no sistema.")

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">

            <div class="row">
                <div class="col s12 m6">
                    <div class="card small blue darken-3">
                        <div class="card-content white-text">
                            <span class="card-title">Termos das escolas</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin.config.termos')}}">Clique aqui para acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card small red darken-3">
                        <div class="card-content white-text">
                            <span class="card-title">Regras e regulamentos</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin.config.regras')}}">Clique aqui para acessar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection