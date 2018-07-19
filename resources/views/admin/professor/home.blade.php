@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.professor')}}" class="breadcrumb">Professor</a>
@endsection

@section('content')

@section('titulo-header', 'Professores')

@section('conteudo-header', 'Esses são os professores cadastrados no sistema!')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            @if(Session::get('mensagem'))
                @include('_layouts._mensagem-erro')
            @endif
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.professor.filtrar') }}">
                @includeIf('_layouts._professor._filtro-professor')
            </form>
        </div>

        <div class="row">
            @includeIf('_layouts._professor._tabela-professor')
        </div>

        <div class="fixed-action-btn">

            <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="top"
               data-delay="50" data-tooltip="Adicionar professor"
               href="{{route ('admin.professor.create')}}">
                <i class="material-icons">add</i></a>
        </div>

    </div>
</div>

@section('conteudo-deletar', "Você tem certeza que deseja deletar o professor abaixo?")
@includeIf('_layouts._modal-delete')

@endsection