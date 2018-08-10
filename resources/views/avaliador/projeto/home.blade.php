@extends('_layouts._app')

@section('titulo','Motic Avaliador')

@section('breadcrumb')
    <a href="{{{route ('avaliador')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('avaliador.projeto')}}}" class="breadcrumb">Projetos</a>
@endsection

@section('content')

    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

@section('titulo-header', 'Avaliador')

@section('conteudo-header', 'Esses são os projetos que você está vinculado e deverá avaliar')

@includeIf('_layouts._sub-titulo')

<div class="section container col s12 m6 l8">
    <div class="card-panel">
        <div class="row">
            @forelse($projetos as $projeto)
                <div class="col s12 m12 l12">
                    <div class="card small green darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">{{$projeto->titulo}}</span>
                            <blockquote>
                                Estande: {{$projeto->estande}}
                                <br>Alunos: @foreach($projeto->aluno as $alunos) {{$alunos->name.','}} @endforeach
                                <br>Professor: @foreach($projeto->professor as $professores) {{$professores->name.','}} @endforeach
                            </blockquote>
                        </div>
                        <div class="card-action">
                            <a class="btn" type='submit' href="{{route ('avaliador.projeto.avaliar', $projeto->id)}}">Avaliar</a>
                        </div>
                    </div>
                </div>
            @empty
                Sem projetos
            @endforelse
        </div>
    </div>
</div>
@endsection