@extends('_layouts._app')

@section('titulo','Motic Escola')

@section('breadcrumb')
    <a href="{{route ('escola')}}" class="breadcrumb">Home</a>
    <a href="{{route ('escola.documentos')}}" class="breadcrumb">Alunos</a>
@endsection

@section('content')

@section('titulo-header', 'Documentos')

@section('conteudo-header', 'Esses são os documentos disponíveis disponíveis no sistema!')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            @if(Session::get('mensagem'))
                @include('_layouts._mensagem-sucesso')
            @endif
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card small blue darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Termo de autorização de uso de imagem para maior de idade</span>
                            <blockquote>
                                Termo de autorização e consentimento de uso da imagem, voz e nome para maior de
                                idade.
                            </blockquote>
                        </div>
                        <div class="card-action">
                            <a class="btn" target="_blank" href="{{url('storage/termos/termo-maior-motic.pdf')}}">Visualizar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l6">
                    <div class="card small green darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Contrato de convivência, responsabilidade e publicidade</span>
                            <blockquote>
                                Contrato de convivência, responsabilidade e publicidade
                            </blockquote>
                        </div>
                        <div class="card-action">
                            <a class="btn" target="_blank"
                               href="{{url('storage/termos/contrato-convivencia-motic.pdf')}}">Visualizar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l12">
                    <div class="card small red darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Termo de autorização de uso de imagem para menor de idade</span>
                            <blockquote>
                                Termo de autorização e consentimento de uso da imagem, voz e nome para menor ou
                                maior incapaz.
                            </blockquote>
                        </div>
                        <div class="card-action">
                            <a class="btn" target="_blank" href="{{url('storage/termos/termo-menor-motic.pdf')}}">Visualizar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection