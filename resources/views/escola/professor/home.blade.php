@extends('_layouts._app')

@section('titulo','Motic Escola')

@section('breadcrumb')
    <a href="{{route ('escola')}}" class="breadcrumb">Home</a>
    <a href="{{route ('escola.professor')}}" class="breadcrumb">Professores</a>
@endsection

@section('content')

    @includeIf('_layouts._professor._home-professor')

@endsection