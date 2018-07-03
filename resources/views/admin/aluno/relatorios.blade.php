@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/aluno/home')}}}" class="breadcrumb">Alunos</a>
    <a href="{{{route ('admin/aluno/home')}}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Relatórios</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os relatórios disponíveis para os alunos do sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card red darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos os alunos resumido</span>
                            <p>Para gerar um relatório de todos os alunos do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin/aluno/relatorios/todosExibe')}}">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card green darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Aluno por escola</span>
                            <p>Para gerar um relatório dos alunos de cada escola.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin/aluno/relatorios/escolaExibe')}}">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card blue darken-3 hoverable">
                        <form class="" method="post" enctype="multipart/form-data"
                              action="{{route('admin/aluno/relatorios/alunoExibe')}}">
                            {{csrf_field()}}
                            <div class="card-content white-text">
                                <span class="card-title">Aluno individual</span>
                                <p>Para gerar um relatório de um aluno específico do sistema, insira o ID abaixo:</p>

                                    <div class="input-field col s12">
                                        <select id='id' name="id" required>
                                            <option value="" disabled selected>Selecione um aluno</option>
                                        @forelse($alunos as $aluno)
                                                <option value="{{$aluno->id}}">{{$aluno->name}}</option>
                                            @empty
                                                <option value="" disabled selected>Nenhum aluno cadastrado no sistema</option>
                                            @endforelse
                                        </select>
                                        <label data-error="Selecione um aluno válido!" data-success="Ok" for="id">Aluno</label>
                                    </div>
                            <br> <br><br>
                            </div>
                            <div class="card-action">
                                <button class="btn" type="submit">Gerar relatório</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card purple darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos alunos completo</span>
                            <p>Para gerar um relatório de todos os alunos do sistema, com os seguintes dados:</p>
                            <li>Dados pessoais</li>
                            <li>Dados escolares</li>
                            <li>Endereço</li>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin/aluno/relatorios/todosCompletoExibe')}}">Gerar relatório</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection