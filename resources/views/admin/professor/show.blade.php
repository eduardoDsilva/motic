@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.professor')}}" class="breadcrumb">Professores</a>
    <a href="" class="breadcrumb">{{$professor->name}}</a>
@endsection

@section('content')

    @includeIf('_layouts._professor._show-professor')

@endsection
