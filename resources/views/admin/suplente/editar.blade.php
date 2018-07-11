@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.suplente')}}" class="breadcrumb">Suplentes</a>
    <a href="" class="breadcrumb">Editar</a>
@endsection

@section('content')

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

    @section('titulo-header', 'Editar projeto suplente')

    @section('conteudo-header', "- Os campos com ' * ' são de preenchimento obrigatório.")

    @includeIf('_layouts._sub-titulo')

    <section class="section container">
        <div class="card-panel">
            <div class="row">
                <article class="col s12">
                    <form method="POST" enctype="multipart/form-data"
                          action="{{ route('admin.suplente.update', $projeto->id) }}">

                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>

                        <h5>Dados básicos</h5>

                        <div class="row">
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">perm_identity</i>
                                <label for="nome">Título *</label>
                                <input type="text" name="titulo" value="{{$projeto->titulo}}" required>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">perm_identity</i>
                                <label for="nome">Área *</label>
                                <input type="text" name="area" value="{{$projeto->area}}" required>
                            </div>
                        </div>

                        <div class='row'>
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">assignment</i>
                                <textarea name="resumo" id="textarea1"
                                          class="materialize-textarea">{{$projeto->resumo}}</textarea>
                                <label for="textarea1">Resumo *</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">assignment</i>
                                <select multiple name="disciplina_id[]">
                                    <option value="" disabled selected>Selecione as disciplinas</option>
                                    @forelse ($disciplinas as $disciplina)
                                        <option value="{{$disciplina->id}}">{{$disciplina->name}}</option>
                                    @empty
                                        <option value="">Nenhuma disciplina cadastrada no sistema! Entre em contato com
                                            o administrador.
                                        </option>
                                    @endforelse
                                </select>
                                <label>Disciplinas *</label>
                            </div>
                        </div>

                        {{csrf_field()}}

                        <p class="center-align">
                            <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>salvar
                            </button>
                        </p>

                    </form>

                </article>
            </div>
        </div>
        </div>
    </section>
@endsection


























