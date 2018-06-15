@extends('layouts.app')

@section('titulo','Motic Escola')

@section('breadcrumb')
    <a href="{{{route ('escola/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('escola/aluno/home')}}}" class="breadcrumb">Alunos</a>
    @if(isset($aluno))
        <a href="" class="breadcrumb">Editar</a>
    @else
        <a href="{{{route ('escola/aluno/cadastro/registro')}}}" class="breadcrumb">Cadastro</a>
    @endif
@endsection

@section('campo-escola')
    <div class="input-field col s6">
        <i class="material-icons prefix">people</i>
        <select id='escolaAluno' name="escola_id">
            <option value="{{$escolas->id}}" selected>{{$escolas->name or old('name')}}</option>
        </select>
        <label>Escola</label>
    </div>
@endsection

@section('campo-etapa')
    <div class="input-field col s6">
        <i class="material-icons prefix">book</i>
        <select id='anoLetivo' name="etapa">
            <option value="" disabled selected>Ano Letivo</option>
            @foreach($ano as $a)
                <option value="{{$a}}" @if(isset($aluno)) @if($aluno->anoLetivo == $a) selected @endif @endif>{{$a}}</option>
            @endforeach
        </select>
        <label>Ano Letivo</label>
    </div>
@endsection

@section('content')

    @include('aluno.form-aluno')

@endsection