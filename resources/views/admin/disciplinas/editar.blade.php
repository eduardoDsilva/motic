@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/disciplinas/home')}}}" class="breadcrumb">Disciplinas</a>
    <a href="#" class="breadcrumb">Editar</a>
@endsection

@section('content')

    @if( isset($errors) && count($errors) > 0 )
        <div class="center-align">
            @foreach( $errors->all() as $error )
                <div class="chip red">
                    {{$error}}
                    <i class="close material-icons">close</i>
                </div>
            @endforeach
        </div>
    @endif

    <section class="section container">
        <div class="card-panel">
        <div class="row">
            <h3 class="center-align">Editar Disciplina</h3>
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data" action="{{ url("/admin/disciplinas/".$disciplina->id) }}">
                        <h4>Editar disciplina</h4>

                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

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
                                <textarea data-length="240" name="descricao" id="textarea1" class="materialize-textarea">{{$disciplina->descricao}}</textarea>
                                <label for="textarea1">Descrição</label>
                            </div>
                        </div>
                    <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>salvar</button>
                </form>

            </article>
        </div>
        </div>
    </section>

@endsection
