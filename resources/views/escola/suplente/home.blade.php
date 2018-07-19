@extends('_layouts._app')

@section('titulo','Motic Escola')

@section('breadcrumb')
    <a href="{{route ('escola')}}" class="breadcrumb">Home</a>
    <a href="{{route ('escola.suplente')}}" class="breadcrumb">Suplentes</a>
@endsection

@section('content')

@section('titulo-header', 'Suplentes')

@section('conteudo-header', 'Esses são os projetos suplentes da sua escola!')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            @if(Session::get('mensagem'))
                @include('_layouts._mensagem-erro')
            @endif
            <form method="POST" enctype="multipart/form-data" action="{{ route('escola.suplente.filtrar') }}">
                @includeIf('_layouts._suplente._filtro-suplente')
            </form>
        </div>

        <div class="row">
            @includeIf('_layouts._suplente._tabela-suplente')
        </div>
        @can('view', $inscricao = \App\Inscricao::orderBy('id', 'desc')->first())

        <div class="fixed-action-btn">
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger"
                   data-position="top" data-delay="50" data-tooltip="Adicionar projeto suplente"
                   href="{{route ('escola.suplente.create')}}"><i class="material-icons">add</i></a>
            </div>
        </div>
        @endcan

    </div>
</div>
</div>

@section('conteudo-deletar', "Você tem certeza que deseja deletar o projeto abaixo?")
@includeIf('_layouts._modal-delete')

@endsection