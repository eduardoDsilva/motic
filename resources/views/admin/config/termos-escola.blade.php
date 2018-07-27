@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.config.pdf')}}" class="breadcrumb">PDF's</a>
    <a href="{{route ('admin.config.termos')}}" class="breadcrumb">Termos das escolas</a>
@endsection

@section('content')

@section('titulo-header', "PDF's")

@section('conteudo-header', "Esses são os termos disponíveis para as escolas no sistema.")

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            @if(Session::get('mensagem'))
                @include('_layouts._mensagem-sucesso')
            @endif
            <div class="row">
                <div class="col s12 m12">
                    <div class="card small blue darken-4">
                        <form enctype="multipart/form-data" method="post"
                              action="{{route ('admin.config.termo-maior') }}">
                            {{csrf_field()}}
                            <div class="card-content white-text">
                                <span class="card-title">Termo de autorização de uso de imagem para maior de idade</span>
                                <blockquote>
                                    Termo de autorização e consentimento de uso da imagem, voz e nome para maior de
                                    idade.
                                </blockquote>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>PDF</span>
                                        <input type="file" name="pdf" id="pdf">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn" type="submit">Enviar</button>
                                <a class="btn" target="_blank" href="{{url('storage/termos/termo-maior-motic.pdf')}}">Visualizar</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col s12 m12">
                    <div class="card small red darken-4">
                        <form enctype="multipart/form-data" method="post"
                              action="{{route ('admin.config.termo-menor') }}">
                            {{csrf_field()}}
                            <div class="card-content white-text">
                                <span class="card-title">Termo de autorização de uso de imagem para menor de idade</span>
                                <blockquote>
                                    Termo de autorização e consentimento de uso da imagem, voz e nome para menor ou
                                    maior incapaz.
                                </blockquote>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>PDF</span>
                                        <input type="file" name="pdf" id="pdf">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn" type="submit">Enviar</button>
                                <a class="btn" target="_blank" href="{{url('storage/termos/termo-menor-motic.pdf')}}">Visualizar</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col s12 m12">
                    <div class="card small green darken-4">
                        <form enctype="multipart/form-data" method="post"
                              action="{{route ('admin.config.contrato-convivencia') }}">
                            {{csrf_field()}}
                            <div class="card-content white-text">
                                <span class="card-title">Contrato de convivência, responsabilidade e publicidade</span>
                                <blockquote>
                                    Contrato de convivência, responsabilidade e publicidade
                                </blockquote>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>PDF</span>
                                        <input type="file" name="pdf" id="pdf">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn" type="submit">Enviar</button>
                                <a class="btn" target="_blank"
                                   href="{{url('storage/termos/contrato-convivencia-motic.pdf')}}">Visualizar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection