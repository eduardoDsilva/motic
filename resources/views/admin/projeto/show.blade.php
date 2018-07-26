@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.projeto')}}" class="breadcrumb">Projetos</a>
    <a href="" class="breadcrumb">{{$projeto->titulo}}</a>
@endsection

@section('content')

    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

@section('titulo-header', $projeto->titulo)

@section('conteudo-header', 'Esses são todos os dados do projeto'.$projeto->titulo)

@includeIf('_layouts._sub-titulo')

@include('_layouts._projeto._show-projeto')

@endsection