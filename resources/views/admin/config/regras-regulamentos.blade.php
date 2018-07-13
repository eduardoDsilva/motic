@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.config.pdf')}}" class="breadcrumb">PDF's</a>
    <a href="{{route ('admin.config.termos')}}" class="breadcrumb">Termos das escolas</a>
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
                <div class="col s12 m12">
                    <div class="card small blue darken-3">
                        <div class="card-content white-text">
                            <span class="card-title">Regras de autorização e segurança</span>
                            <blockquote>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                            </blockquote>
                            <form action="#">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>PDF</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="#">Enviar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12">
                    <div class="card small red darken-3">
                        <div class="card-content white-text">
                            <span class="card-title">Regulamento da MOTIC</span>
                            <blockquote>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                            </blockquote>
                            <form action="#">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>PDF</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="#">Enviar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection