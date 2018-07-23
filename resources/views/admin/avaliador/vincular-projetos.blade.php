@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.avaliador')}}" class="breadcrumb">Avaliador</a>
    <a href="" class="breadcrumb">Vincular avaliador</a>
@endsection

@section('content')

@section('titulo-header', 'Vincular avaliador')

@section('conteudo-header', 'Esses são os projetos disponíveis no sistema!')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="row">
            <div class="input-field col s12 m12 l6">
                <select name="tipo" required>
                    <option value="" disabled selected>Projetos...</option>
                    @forelse($educacao_infantil as $projeto)
                        <option value="{{$projeto->id}}">{{$projeto->titulo}}</option>
                    @empty
                        <option>Sem projetos dessa categoria</option>
                    @endforelse

                </select>
                <label>Educação Infantil</label>
            </div>
            <div class="input-field col s12 m12 l6">
                <select name="tipo" required>
                    <option value="" disabled selected>Projetos...</option>
                    @forelse($emef1 as $projeto)
                        <option value="{{$projeto->id}}">{{$projeto->titulo}}</option>
                    @empty
                        <option>Sem projetos dessa categoria</option>
                    @endforelse

                </select>
                <label>EMEF 1</label>
            </div>
            <div class="input-field col s12 m12 l6">
                <select name="tipo" required>
                    <option value="" disabled selected>Projetos...</option>
                    @forelse($emef2 as $projeto)
                        <option value="{{$projeto->id}}">{{$projeto->titulo}}</option>
                    @empty
                        <option>Sem projetos dessa categoria</option>
                    @endforelse

                </select>
                <label>EMEF 2</label>
            </div>
            <div class="input-field col s12 m12 l6">
                <select name="tipo" required>
                    <option value="" disabled selected>Projetos...</option>
                    @forelse($emef3 as $projeto)
                        <option value="{{$projeto->id}}">{{$projeto->titulo}}</option>
                    @empty
                        <option>Sem projetos dessa categoria</option>
                    @endforelse

                </select>
                <label>EMEF 3</label>
            </div>
            <div class="input-field col s12 m12 l12">
                <select name="tipo" required>
                    <option value="" disabled selected>Projetos...</option>
                    @forelse($eja as $projeto)
                        <option value="{{$projeto->id}}">{{$projeto->titulo}}</option>
                    @empty
                        <option>Sem projetos dessa categoria</option>
                    @endforelse
                </select>
                <label>EJA</label>
            </div>
        </div>

    </div>
</div>

@section('conteudo-deletar', "Você tem certeza que deseja deletar o avaliador abaixo?")
@includeIf('_layouts._modal-delete')

@endsection
