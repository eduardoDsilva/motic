@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('escola')}}" class="breadcrumb">Home</a>
    <a href="{{route ('escola.professor')}}" class="breadcrumb">Professor</a>
    @if(isset($professor))
        <a href="" class="breadcrumb">Editar</a>
    @else
        <a href="{{{route ('escola.professor.create')}}}" class="breadcrumb">Cadastro</a>
    @endif
@endsection

@section('campo-escola')

    <div class="input-field col s12 m6 l6">
        <i class="material-icons prefix">people</i>
        <select name="escola_id">
            <option value="{{$escola->id}}" selected>{{$escola->name}}</option>
        </select>
        <label>Escola *</label>
    </div>

@endsection

@section('form')

    method="POST" enctype="multipart/form-data"
    action="@if(isset($professor)){{ route("escola.professor.update", $professor->id) }} @else {{ route('escola.professor.store') }} @endif"

@endsection

@section('content')

    @includeIf('layouts.professor.form-professor')

@endsection