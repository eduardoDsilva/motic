@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.escola')}}" class="breadcrumb">Escolas</a>
@endsection

@section('content')

@section('titulo-header', 'Escolas')

@section('conteudo-header', 'Essas são as escolas cadastradas no sistema!')

@includeIf('_layouts._sub-titulo')

    <div class="section container">
        <div class="card-panel">
            <div class="col s12 m4 l8">
                @if(Session::get('mensagem'))
                    @include('_layouts._mensagem-sucesso')
                @endif
                <form method="POST" enctype="multipart/form-data" action="{{ route("admin.escola.filtrar") }}">
                    @includeIf('_layouts._escola._filtro-escola')
                </form>
            </div>

            <div class="row">
                @includeIf('_layouts._escola._tabela-escola')
            </div>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="top"
                   data-delay="50" data-tooltip="Adicionar escola"
                   href="{{route ('admin.escola.create')}}">
                    <i class="material-icons">add</i></a>
            </div>

        </div>
    </div>

@section('conteudo-deletar', "Você tem certeza que deseja deletar a escola abaixo?")
@includeIf('_layouts._modal-delete')

@endsection
