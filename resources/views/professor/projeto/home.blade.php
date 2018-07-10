@extends('layouts.app')

@section('titulo','Motic Professor')

@section('breadcrumb')
    <a href="{{{route ('professor')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('professor.projeto')}}}" class="breadcrumb">Home</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Projeto</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esse é o projeto que você faz parte.</h5>
            </div>
        </div>
    </div>
    <div class="section container">
        <div class="card-panel">
            <div class="row">
                @if($projeto == null)
                    <ul class="collection with-header">
                        <li class="collection-header"><h4 class="center-align">Professor sem projeto</h4></li>
                    </ul>
                @else
                    @foreach($projeto as $p)
                        <ul class="collection with-header hoverable">
                            <li class="collection-header"><h4 class="center-align">{{$p->titulo}}</h4></li>
                            <li class="collection-item">Área: {{$p->area}}</li>
                            <li class="collection-item">Resumo: {{$p->resumo}}</li>
                            <li class="collection-item">Disciplinas: @foreach($p->disciplina as $disciplina) {{$disciplina->name.", "}}@endforeach</li>

                            <li class="collection-header"><h4>Alunos</h4></li>
                            @foreach($p->aluno as $aluno)
                                <li class="collection-item">{{$aluno->name}}</li>
                            @endforeach
                            <li class="collection-header"><h4>Professores</h4></li>
                            @foreach($p->professor as $professor)
                                <li class="collection-item">{{$professor->name}} - {{$professor->tipo}}</li>
                            @endforeach
                            <li class="collection-header"><h4>Escola</h4></li>
                            <li class="collection-item">{{$p->escola->name}}</li>
                        </ul>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection