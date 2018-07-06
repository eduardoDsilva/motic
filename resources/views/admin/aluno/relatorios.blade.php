@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.aluno')}}" class="breadcrumb">Alunos</a>
    <a href="{{route ('admin.aluno.relatorios')}}" class="breadcrumb">Relatórios</a>
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
                <div class="col s12 m12 l6">
                    <div class="card small red darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos os alunos resumido</span>
                            <p>Para gerar um relatório de todos os alunos do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin.aluno.relatorios.todos.alunos.resumo')}}" target="_blank">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small purple darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos alunos completo</span>
                            <p>Para gerar um relatório de todos os dados dos alunos do sistema</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin.aluno.relatorios.todos.alunos.completo')}}" target="_blank">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small green darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Aluno por escola</span>
                            <p>Para gerar um relatório dos alunos de cada escola.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin.aluno.relatorios.alunos.por.escola')}}" target="_blank">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small blue darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Aluno individual</span>
                            <p>Para gerar um relatório de um aluno específico do sistema, insira o ID abaixo:</p>
                        </div>
                        <div class="card-action">
                            <button class="modal-trigger btn" type="submit" data-target="modal1" href="#modal1" >Relatório</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(isset($alunos))
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Alunos</h4>

                <div class="col s12 m4 l8">
                    <form method="POST" enctype="multipart/form-data" action="{{ route("admin.aluno.relatorios.filtrar") }}">
                        <div class="row">
                            <div class="input-field col s4">
                                <select required name="tipo">
                                    <option value="" disabled selected>Filtrar por...</option>
                                    <option value="id">ID</option>
                                    <option value="nome">Nome</option>
                                    <option value="escola">Escola</option>
                                </select>
                                <label>Filtros</label>
                            </div>

                            <div class="input-field col s7">
                                <input id="search" type="search" name="search" required>
                                <label for="search">Pesquise no sistema...</label>
                            </div>
                            {{csrf_field()}}
                            <div class="input-field col s1">
                                <button type="submit" class="btn-floating" target="_blank" ><i class="material-icons">search</i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="centered responsive-table highlight bordered">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Escola</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($alunos as $aluno)
                        <tr>
                            <td>{{$aluno->id}}</td>
                            <td>{{$aluno->name}}</td>
                            <td>{{$aluno->escola->name}}</td>
                            <td>
                                <a class="modal-trigger tooltipped" target="_blank" data-position="top" data-delay="50" data-tooltip="Gerar relatório"  href="{{route ('admin.aluno.relatorio.aluno', $aluno->id)}}"><i class="small material-icons">chrome_reader_mode</i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Nenhum aluno encontrado</td>
                            <td>Nenhum aluno encontrado</td>
                            <td>Nenhum aluno encontrado</td>
                            <td>Nenhum aluno encontrado</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$alunos->links()}}
            </div>
        </div>
    @endif

@endsection

@section('modal')
    @if(isset($modal))
        $(document).ready(function(){
            $('#modal1').modal('open');
        });
    @endif
@endsection