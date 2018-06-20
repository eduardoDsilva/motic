@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/professor/home')}}}" class="breadcrumb">Professor</a>
    @if(isset($professor))
        <a href="" class="breadcrumb">Editar</a>
    @else
        <a href="{{{route ('admin/professor/cadastro/registro')}}}" class="breadcrumb">Cadastro</a>
    @endif
@endsection

@section('campo-escola')

    <div class="input-field col s4">
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
    action="@if(isset($professor)){{ url("/admin/professor/".$professor->user->id) }} @else {{ route('admin/professor/cadastro/registro') }} @endif"

@endsection

@section('content')

@includeIf('layouts.professor.form-professor')

@endsection
