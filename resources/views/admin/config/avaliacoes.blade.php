@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.config.avaliacoes')}}" class="breadcrumb">Avaliações</a>
@endsection

@section('content')

@section('titulo-header', 'Inscrições')

@section('conteudo-header', 'Aqui você pode configurar o período que os avalaidores poderão ver os projetos designados a eles e avaliar os mesmos.')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            @if(Session::get('mensagem'))
                @include('_layouts._mensagem-sucesso')
            @endif
            <blockquote>Atenção! Assim que o período de avaliações indicado nos campos abaixo acabar, os avaliadores não
                poderão mais
                ver os projetos designados a eles e dar as notas. Você pode postergar essa data ou reabrir
                o período de avaliações a qualquer momento.
            </blockquote>

            <form method="POST" enctype="multipart/form-data"
                  action="{{ route("admin.config.avaliacoes.store") }}">
                {{csrf_field()}}
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">today</i>
                        <input type="text" class="datepicker" name="data_inicio" required
                               value="{{$datas->data_inicio or old('data_inicio')}}">
                        <label for="data_inicio">Data do início das avaliações</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker" name="hora_inicio" required
                               value="{{$datas->hora_inicio or old('hora_inicio')}}">
                        <label for="nascimento">Hora do início das avaliações</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">today</i>
                        <input type="text" class="datepicker" name="data_fim" required
                               value="{{$datas->data_fim or old('data_fim')}}">
                        <label for="data_fim">Data do fim das avaliações</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">access_time</i>
                        <input type="text" class="timepicker" name="hora_fim" required
                               value="{{$datas->hora_fim or old('hora_fim')}}">
                        <label for="nascimento">Hora do fim das avaliações</label>
                    </div>
                    <div class="center center-align">
                        <button class="waves-effect waves-light btn" type="submit"><i
                                    class="material-icons right">send</i>salvar
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection