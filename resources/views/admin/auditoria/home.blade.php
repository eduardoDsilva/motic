@extends('layout.site')

@section('titulo','Motic Admin - Auditoria')

@section('conteudo')

    @if(session('success'))
        {{session('success')}}
    @endif

    <a class="btn green" href="{{url()->previous()}}">Voltar</a>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">Auditoria</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são os registros realizados no sistema!</h5>
            </div>
            <br>
        </div>
    </div>

    <div class="container">
        <div class="col s12 m4 l8">

            <table class="centered responsive-table highlight bordered">
                <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Descricao</th>
                    <th>Usuário Responsável</th>
                    <th>ID do responsável</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($auditorias as $auditoria)
                    <tr>
                        <td>{{$auditoria->tipo}}</td>
                        <td>{{$auditoria->descricao}}</td>
                        <td>{{$auditoria->nome_usuario}}</td>
                        <td>{{$auditoria->user_id}}</td>
                    </tr>
                @empty
                    <tr>
                        <td>Nenhuma auditoria encontrada</td>
                        <td>Nenhuma auditoria encontrada</td>
                        <td>Nenhuma auditoria encontrada</td>
                        <td>Nenhuma auditoria encontrada</td>
                        <td>Nenhuma auditoria encontrada</td>
                        <td>Nenhuma auditoria encontrada</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <br><br>

            <br><br>

        </div>
    </div>

@endsection
