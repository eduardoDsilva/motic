@extends('_layouts._app')

@section('titulo','Motic Escola')

@section('breadcrumb')
    <a href="{{route ('escola')}}" class="breadcrumb">Home</a>
    <a href="{{route ('escola.aluno')}}" class="breadcrumb">Alunos</a>
@endsection

@section('content')

@section('titulo-header', 'Alunos')

@section('conteudo-header', 'Esses são os alunos da sua escola!')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            @if(Session::get('mensagem'))
                @include('_layouts._mensagem-sucesso')
            @endif
            <form method="POST" enctype="multipart/form-data" action="{{ route('escola.aluno.filtrar') }}">
                @includeIf('_layouts._aluno._filtro-aluno')
            </form>
        </div>

        <div class="row">
            @includeIf('_layouts._aluno._tabela-aluno')
        </div>
        @can('view', $inscricao = \App\Inscricao::orderBy('id', 'desc')->first())
            <div class="fixed-action-btn">

            <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="top"
               data-delay="50" data-tooltip="Adicionar aluno"
               href="{{route ('escola.aluno.create')}}">
                <i class="material-icons">add</i></a>
        </div>
        @endcan
    </div>
</div>

@section('conteudo-deletar', "Você tem certeza que deseja deletar o aluno abaixo?")
@includeIf('_layouts._modal-delete')

@endsection