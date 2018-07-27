@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.config.gerencia.pagina-inicial')}}" class="breadcrumb">Gerenciar pagina inicial</a>
@endsection

@section('content')

@section('titulo-header', 'Página Inicial')

@section('conteudo-header', 'Aqui você pode gerenciar os conteúdos da página inicial.')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card small blue darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Sobre</span>
                            <p>Aqui você poderá gerenciar os conteúdos da aba 'sobre' da página inicial.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin.config.gerencia.sobre')}}">Clique aqui para acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card small red darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Contato</span>
                            <p>Aqui você poderá gerenciar os conteúdos da aba 'contato' da página inicial.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin.config.gerencia.contato')}}">Clique aqui para
                                acessar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection