@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('escola')}}" class="breadcrumb">Home</a>
    <a href="{{route ('escola.professor')}}" class="breadcrumb">Professor</a>
    @if(isset($professor))
        <a href="" class="breadcrumb">Editar</a>
    @else
        <a href="{{route ('escola.professor.create')}}" class="breadcrumb">Cadastro</a>
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

@section('content')

    @includeIf('_layouts._mensagem-erro')

@section('titulo-header', 'Cadastrar professor')

@section('conteudo-header', "- Os campos com ' * ' são de preenchimento obrigatório")

@includeIf('_layouts._sub-titulo')

<section class="section container">
    <div class="card-panel">
        @include('_layouts._mensagem-erro')
        <div class="row">
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data"
                      action="@if(isset($professor)){{ route("escola.professor.update", $professor->user->id) }} @else {{ route('escola.professor.store') }} @endif">
                    @includeIf('_layouts._professor._form-professor')
                </form>
            </article>
        </div>
    </div>
</section>

@endsection