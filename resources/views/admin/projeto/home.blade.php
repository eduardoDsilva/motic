@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.projeto')}}" class="breadcrumb">Projetos</a>
@endsection

@section('content')

    @section('titulo-header', 'Projetos')

    @section('conteudo-header', 'Esses são os projetos cadastrados no sistema!')

    @includeIf('_layouts._sub-titulo')

    <div class="section container">
        <div class="card-panel">
            <div class="col s12 m4 l8">
                @if(Session::get('mensagem'))
                    @include('_layouts._mensagem-sucesso')
                @endif
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.projeto.filtrar') }}">
                    @includeIf('_layouts._projeto._filtro-projeto')
                </form>
            </div>

            <div class="center-align">
                <div class="chip">
                    Atualmente, existem {{$quantidade}} projetos cadastrados no sistema.
                    <i class="close material-icons">close</i>
                </div>
            </div>

            <div class="row">
                @includeIf('_layouts._projeto._tabela-projeto')
            </div>

            <div class="fixed-action-btn">
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger"
                       data-position="top" data-delay="50" data-tooltip="Adicionar projeto"
                       href="{{route ('admin.projeto.create')}}"><i class="material-icons">add</i></a>
                </div>
            </div>

        </div>
    </div>
    </div>

@section('conteudo-deletar', "Você tem certeza que deseja deletar o projeto abaixo?")
@includeIf('_layouts._modal-delete')

@endsection
