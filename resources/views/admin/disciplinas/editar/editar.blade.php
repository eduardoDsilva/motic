@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a class="btn green" href="{{url()->previous()}}">Voltar</a>

    <section class="container">
        <div class="row">
            <h3 class="center-align">Editar Avaliador</h3>
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin/disciplinas/cadastro/registro') }}">
                        <h4>Editar disciplina</h4>
                        {{ csrf_field() }}
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
                                <textarea name="descricao" id="textarea1" class="materialize-textarea">{{$disciplina->descricao}}</textarea>
                                <label for="textarea1">Descrição</label>
                            </div>
                        </div>
                    <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>salvar</button>
                </form>

            </article>
        </div>
    </section>

@endsection
