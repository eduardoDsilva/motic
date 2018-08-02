@extends('_layouts._app')

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
    <div class="input-field col s12 m6 l6">
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
    <div class="input-field col s12 m6 l6">
        <i class="material-icons prefix">book</i>
        <select id='anoLetivo' name="etapa">
        </select>
        <label>Ano/Etapa *</label>
    </div>
@endsection

@section('content')

@section('titulo-header', 'Cadastrar aluno')

@section('conteudo-header', "- Os campos com ' * ' são de preenchimento obrigatório.")

@includeIf('_layouts._sub-titulo')

<div class="container section">
    <div class="card-panel">
        <div class="row">
            @includeIf('_layouts._mensagem-erro')
            <form class="col s12" method="POST" enctype="multipart/form-data"
                  action="@if(isset($aluno)){{route('admin.aluno.update',$aluno->id)}}@else{{route('admin.aluno.store')}}"@endif>
                {{csrf_field()}}
                @include('_layouts._aluno._form-aluno')
            </form>
        </div>
    </div>
</div>

@endsection
