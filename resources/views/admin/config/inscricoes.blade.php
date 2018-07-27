@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.config.inscricoes')}}" class="breadcrumb">Inscrições</a>
@endsection

@section('content')

@section('titulo-header', 'Inscrições')

@section('conteudo-header', 'Aqui você pode configurar o período que as inscrições de projetos, alunos e professores estarão disponíveis para as escolas no sistema.')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            @if(Session::get('mensagem'))
                @include('_layouts._mensagem-sucesso')
            @endif
            <blockquote>Atenção! Assim que o período de inscrições indicado nos campos abaixo acabar, as escolas não
                terão mais acesso ao cadastro de professores, alunos e projetos. Você pode postergar essa data ou
                reabrir
                o período de inscrições a qualquer momento.
            </blockquote>

            <form method="POST" enctype="multipart/form-data"
                  action="{{ route("admin.config.inscricoes.store") }}">
                {{csrf_field()}}
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">today</i>
                        <input type="text" class="datepicker" name="data_inicio" required
                               value="{{$datas->data_inicio or old('data_inicio')}}">
                        <label for="nascimento">Início das inscrições</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">today</i>
                        <input type="text" class="datepicker" name="data_fim" required
                               value="{{$datas->data_fim or old('data_fim')}}">
                        <label for="nascimento">Fim das inscrições</label>
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