@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.config.pdf')}}" class="breadcrumb">PDF's</a>
@endsection

@section('content')

@section('titulo-header', "PDF's")

@section('conteudo-header', "Esses são os PDF's disponíveis no sistema.")

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">

            <div class="row">
                <div class="col s12 m6">
                    <div class="card small blue darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Termos das escolas</span>
                            <p>Nesta sessão você poderá gerenciar os:
                            <li>
                                Termo de autorização de uso de imagem para maior de idade
                            </li>
                            <li>
                                Termo de autorização de uso de imagem para menor de idade
                            </li>
                            <li>
                                Contrato de convivência, responsabilidade e publicidade
                            </li>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin.config.termos')}}">acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card small red darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Regras e regulamentos</span>
                            <p>Nesta sessão você poderá gerenciar os:
                            <li>
                                Regras de exposição e segurança
                            </li>
                            <li>
                                Regulamento da MOTIC
                            </li>
                            <li>
                                Ficha de avaliação
                            </li>
                            </p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin.config.regras')}}">acessar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection