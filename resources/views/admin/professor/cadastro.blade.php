@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.professor')}}" class="breadcrumb">Professor</a>
    @if(isset($professor))
        <a href="{{route ('admin.professor.edit', $professor->id)}}" class="breadcrumb">Editar</a>
    @else
        <a href="{{{route ('admin.professor.create')}}}" class="breadcrumb">Cadastro</a>
    @endif
@endsection

@section('campo-escola')

    <div class="input-field col s12 m6 l6">
        <i class="material-icons prefix">people</i>
        <select name="escola_id">
            <option value="" disabled selected>Selecione a escola</option>
            @forelse ($escolas as $escola)
                <option value="{{$escola->id}}"
                        @if (isset($professor) && $escola->id == $professor->escola_id) selected @endif>{{$escola->name}}</option>
            @empty
                <option value="">Nenhuma escola cadastrada no sistema! Entre em contato com o
                    administrador.
                </option>
            @endforelse
        </select>
        <label>Escola *</label>
    </div>

@endsection

@section('form')

    method="POST" enctype="multipart/form-data"
    action="@if(isset($professor)){{ route("admin.professor.update", $professor->id) }} @else {{ route('admin.professor.store') }} @endif"

@endsection

@section('content')

    @includeIf('layouts.professor.form-professor')

@endsection
