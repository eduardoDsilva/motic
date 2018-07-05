@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.aluno')}}" class="breadcrumb">Alunos</a>
    @if(isset($aluno))
        <a href="" class="breadcrumb">Editar</a>
    @else
        <a href="{{route ('admin.aluno.create')}}" class="breadcrumb">Cadastro</a>
    @endif
@endsection

@section('campo-escola')
    <div class="input-field col s6">
        <i class="material-icons prefix">people</i>
        <select id='escolaAluno' name="escola_id">
            <option value="" disabled selected>Selecione a escola</option>
            @forelse ($escolas as $escola)
                <option value="{{$escola->id}}"
                        @if (isset($aluno) && $escola->id == $aluno->escola_id) selected @endif>{{$escola->name}}</option>
            @empty
                <option value="">Nenhuma escola cadastrada no sistema! Entre em
                    contato com o administrador.
                </option>
            @endforelse
        </select>
        <label>Escola *</label>
    </div>
@endsection

@section('campo-etapa')
    <div class="input-field col s6">
        <i class="material-icons prefix">book</i>
        <select id='anoLetivo' name="etapa">
        </select>
        <label>Ano/Etapa *</label>
    </div>
@endsection

@section('form')

    class="col s12" method="POST" enctype="multipart/form-data"
    action="@if(isset($aluno)){{ route('admin.aluno.update', $aluno->id) }}
    @else {{ route('admin.aluno.store') }}@endif"

@endsection

@section('content')

    @include('layouts.aluno.form-aluno')

@endsection
