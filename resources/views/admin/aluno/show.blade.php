@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/aluno/home')}}}" class="breadcrumb">Alunos</a>
    <a href="" class="breadcrumb">{{$aluno->name}}</a>
@endsection

@section('content')

@include('layouts.aluno.show-aluno')

@endsection
