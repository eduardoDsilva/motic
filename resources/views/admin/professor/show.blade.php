@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/professor/home')}}}" class="breadcrumb">Professores</a>
    <a href="" class="breadcrumb">{{$professor->name}}</a>
@endsection

@section('content')

    @includeIf('layouts.professor.show-professor')

@endsection
