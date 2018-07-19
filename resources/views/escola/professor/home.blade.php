@extends('_layouts._app')

@section('titulo','Motic Escola')

@section('breadcrumb')
    <a href="{{route ('escola')}}" class="breadcrumb">Home</a>
    <a href="{{route ('escola.professor')}}" class="breadcrumb">Professor</a>
@endsection

@section('content')

@section('titulo-header', 'Professores')

@section('conteudo-header', 'Esses são os professores da sua escola!')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            @if(Session::get('mensagem'))
                @include('_layouts._mensagem-erro')
            @endif
            <form method="POST" enctype="multipart/form-data" action="{{ route('escola.professor.filtrar') }}">
                @includeIf('_layouts._professor._filtro-professor')
            </form>
        </div>

        <div class="row">
            @includeIf('_layouts._professor._tabela-professor')
        </div>
        @can('view', $inscricao = \App\Inscricao::orderBy('id', 'desc')->first())
        <div class="fixed-action-btn">

            <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="top"
               data-delay="50" data-tooltip="Adicionar professor"
               href="{{route ('escola.professor.create')}}">
                <i class="material-icons">add</i></a>
        </div>
        @endcan
    </div>
</div>

@section('conteudo-deletar', "Você tem certeza que deseja deletar o professor abaixo?")
@includeIf('_layouts._modal-delete')

@endsection