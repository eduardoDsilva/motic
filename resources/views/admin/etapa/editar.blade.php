@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.etapa')}}" class="breadcrumb">Etapas</a>
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
                <h3 class="center-align">Editar Etapa</h3>
                <article class="col s12">
                    <form method="POST" enctype="multipart/form-data"
                          action="{{ route("admin.etapa.update", $etapa->id) }}">

                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">book</i>
                                <label for="categoria">Nome</label>
                                <input type="text" name="etapa" required value="{{$etapa->etapa}}">
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
