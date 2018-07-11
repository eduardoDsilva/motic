@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.suplente')}}" class="breadcrumb">suplentes</a>
    <a href="" class="breadcrumb">{{$projeto->titulo}}</a>
@endsection

@section('content')

    @if(Session::get('mensagem'))
        <div class="center-align">
            <div class="chip green">
                {{Session::get('mensagem')}}
                <i class="close material-icons">close</i>
            </div>
        </div>
        {{Session::forget('mensagem')}}
    @endif

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">{{$suplente->titulo}}</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são todos os dados do suplente {{$suplente->titulo}}!</h5>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col s12 m3">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Escola</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Escola</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$suplente->escola->id}}</td>
                            <td>{{$suplente->escola->name}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col s12 m5">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Alunos</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Turma</th>
                            <th>Ano</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($alunos as $aluno)
                            <tr>
                                <td>{{$aluno->id}}</td>
                                <td>{{$aluno->name}}</td>
                                <td>{{$aluno->turma}}</td>
                                <td>{{$aluno->ano}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Professores</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Função</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($professores as $professor)
                            <tr>
                                <td>{{$professor->id}}</td>
                                <td>{{$professor->name}}</td>
                                <td>{{$professor->tipo}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
