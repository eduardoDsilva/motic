@extends('_layouts._app')

@section('titulo','Motic - Regulamento')

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Sobre</h1>
        </div>
    </div>

    <div class="container">
        <div class="card-panel">
            @if(isset($conteudo))
                {!! $conteudo->sobre !!}
            @endif
        </div>
    </div>

@endsection