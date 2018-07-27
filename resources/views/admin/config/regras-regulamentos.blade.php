@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.config.pdf')}}" class="breadcrumb">PDF's</a>
    <a href="{{route ('admin.config.termos')}}" class="breadcrumb">Regras e regulamentos</a>
@endsection

@section('content')

@section('titulo-header', "PDF's")

@section('conteudo-header', "Essas são as regras e os regulamentos disponíveis no sistema.")

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
                              action="{{route ('admin.config.regras_de_autorizacao') }}">
                            {{csrf_field()}}
                            <div class="card-content white-text">
                                <span class="card-title">Regras de exposição e segurança</span>
                                <blockquote>
                                    A Comissão Organizadora da MOTIC SÃO LEO faz o controle dos projetos em exposição
                                    para garantir a adequação às regras da própria MOTIC e, posteriormente, da MOSTRATEC
                                    Júnior, conforme as orientações que seguem.
                                </blockquote>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>PDF</span>
                                        <input type="file" name="pdf" id="pdf">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="pdf" id="pdf" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn" type='submit'>Enviar</button>
                                <a class="btn" target="_blank" href="{{url('storage/regras/regras-motic.pdf')}}">Visualizar</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col s12 m12">
                    <div class="card small red darken-4">
                        <form enctype="multipart/form-data" method="post"
                              action="{{route ('admin.config.regulamento') }}">
                            {{csrf_field()}}
                            <div class="card-content white-text">
                                <span class="card-title">Regulamento da MOTIC</span>
                                <blockquote>
                                    A Mostra de Tecnologia e Inovação com Ciências - MOTIC SÃO LEO é um evento aberto à
                                    Rede
                                    Municipal de Ensino de São Leopoldo, voltado à difusão e à promoção da pesquisa e da
                                    investigação científica em seus níveis de ensino.
                                </blockquote>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>PDF</span>
                                        <input type="file" name="pdf" id="pdf">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="pdf" id="pdf" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn" type='submit'>Enviar</button>
                                <a class="btn" target="_blank"
                                   href="{{url('storage/regulamentos/regulamento-motic.pdf')}}">Visualizar</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col s12 m12">
                    <div class="card small green darken-4">
                        <form enctype="multipart/form-data" method="post"
                              action="{{route ('admin.config.ficha-de-avaliacao') }}">
                            {{csrf_field()}}
                            <div class="card-content white-text">
                                <span class="card-title">Ficha de avaliação</span>
                                <blockquote>
                                    Essa é a ficha de avaliação que estará disponível para os avaliadores do sistema e,
                                    também, para a impressão no dia da avaliação caso seja necessário um documento
                                    físico.
                                </blockquote>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>PDF</span>
                                        <input type="file" name="pdf" id="pdf">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="pdf" id="pdf" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn" type='submit'>Enviar</button>
                                <a class="btn" target="_blank"
                                   href="{{url('storage/termos/ficha-de-avaliacao-motic.pdf')}}">Visualizar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection