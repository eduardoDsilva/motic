@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.disciplina')}}" class="breadcrumb">Disciplinas</a>
    <a href="#" class="breadcrumb">Editar</a>
@endsection

@section('content')

    <section class="section container">
        <div class="card-panel">
            <div class="row">
                @if(Session::get('mensagem'))
                    @include('_layouts._mensagem-sucesso')
                @endif
                @include('_layouts._mensagem-erro')
                <h3 class="center-align">Editar Disciplina</h3>
                <article class="col s12">
                    <form method="POST" enctype="multipart/form-data"
                          action="{{ route("admin.disciplina.update", $disciplina->id) }}">
                        <h4>Editar disciplina</h4>

                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">book</i>
                                <label for="nome">Nome</label>
                                <input type="text" name="name" required value="{{$disciplina->name}}">
                            </div>
                        </div>
                        <div class='row'>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">assignment</i>
                                <textarea data-length="240" name="descricao" id="textarea1"
                                          class="materialize-textarea">{{$disciplina->descricao}}</textarea>
                                <label for="textarea1">Descrição</label>
                            </div>
                        </div>
                        <button class="waves-effect waves-light btn" type="submit"><i
                                    class="material-icons right">send</i>salvar
                        </button>
                    </form>

                </article>
            </div>
        </div>
    </section>

@endsection
