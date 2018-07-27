@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.aluno')}}" class="breadcrumb">Alunos</a>
    <a href="" class="breadcrumb">{{$aluno->name}}</a>
@endsection

@section('content')

    @section('titulo-header', $aluno->name)

    @section('conteudo-header', 'Esses são todos os dados do aluno '.$aluno->name)

    @includeIf('_layouts._sub-titulo')

    @include('_layouts._aluno._show-aluno')

@endsection
