@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('escola/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('escola/professor/home')}}}" class="breadcrumb">Professor</a>
    @if(isset($professor))
        <a href="" class="breadcrumb">Editar</a>
    @else
        <a href="{{{route ('escola/professor/cadastro/registro')}}}" class="breadcrumb">Cadastro</a>
    @endif
@endsection

@section('campo-escola')

    <div class="input-field col s6">
        <i class="material-icons prefix">people</i>
        <select name="escola_id">
            <option value="{{$escola->id}}" selected>{{$escola->name}}</option>
        </select>
        <label>Escola *</label>
    </div>

@endsection

@section('form')

    method="POST" enctype="multipart/form-data"
    action="@if(isset($professor)){{ url("/escola/professor/".$professor->user->id) }} @else {{ route('escola/professor/cadastro/registro') }} @endif"

@endsection

@section('content')

    @includeIf('layouts.professor.form-professor')

@endsection