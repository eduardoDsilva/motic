@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.auditoria')}}" class="breadcrumb">Alunos</a>
    <a href="{{route ('admin.auditoria.relatorios')}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Relatórios</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os relatórios disponíveis para realizar auditoria do sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card small red darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Registros do sistema completo</span>
                            <p>Para gerar um relatório de todos os registros do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" target="_blank" href="{{route ('admin.auditoria.relatorios.todos.registros')}}">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small purple darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Registro individual</span>
                            <p>Para gerar um relatório de um registro do sistema.</p>
                        </div>
                        <div class="card-action">
                            <button class="modal-trigger btn" target="_blank" data-target="modal" href="#modal1" type="submit">Gerar relatório</button>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small green darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Registros do sistema resumo</span>
                            <p>Para gerar um relatório dos registros do sistema de forma resumida.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" target="_blank" href="{{route('admin.auditoria.relatorios.registros.resumo')}}">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small blue darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Registros por usuário</span>
                            <p>Para gerar um relatório de todos os registros de um único usuário.</p>
                        </div>
                        <div class="card-action">
                            <button class="modal-trigger btn" target="_blank" data-target="modal2" href="#modal2" type="submit">Gerar relatório</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

@if(isset($auditorias))
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Auditorias</h4>

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="{{ route("admin.auditoria.relatorios.filtrar") }}">
                    <div class="row">
                        <div class="input-field col s4">
                            <select name="tipo" drequired>
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="tipo">Tipo</option>
                                <option value="objeto">Objeto</option>
                                <option value="user">Usuário responsável</option>
                            </select>
                            <label>Filtros</label>
                        </div>

                        <div class="input-field col s7">
                            <input id="search" type="search" name="search" required>
                            <label for="search">Pesquise no sistema...</label>
                        </div>
                        {{csrf_field()}}
                        <div class="input-field col s1">
                            <button type="submit" class="btn-floating"><i class="material-icons">search</i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <table class="centered responsive-table highlight bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Descricao</th>
                        <th>Objeto</th>
                        <th>Usuário</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($auditorias as $auditoria)
                        <tr>
                            <td>{{$auditoria->id}}</td>
                            <td>{{$auditoria->tipo}}</td>
                            <td width="70%">{{$auditoria->descricao}}</td>
                            <td>{{$auditoria->objeto}}</td>
                            <td width="20%">{{$auditoria->nome_usuario}}</td>
                            <td>
                                <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Gerar relatório" target="_blank" href="{{route('admin.auditoria.relatorios.registro.individual', $auditoria->id)}}"><i class="small material-icons">chrome_reader_mode</i></a>
                            </td>
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
                {{$auditorias->links()}}
            </div>
        </div>
    </div>
@endif
@if(isset($usuarios))
    <!-- Modal Structure -->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <h4>Usuários</h4>

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="{{ route("admin.auditoria.relatorios.user.filtrar") }}">
                    <div class="row">
                        <div class="input-field col s4">
                            <select name="tipo" drequired>
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="tipo">Nome</option>
                                <option value="objeto">Username</option>
                            </select>
                            <label>Filtros</label>
                        </div>

                        <div class="input-field col s7">
                            <input id="search" type="search" name="search" required>
                            <label for="search">Pesquise no sistema...</label>
                        </div>
                        {{csrf_field()}}
                        <div class="input-field col s1">
                            <button type="submit" class="btn-floating"><i class="material-icons">search</i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <table class="centered responsive-table highlight bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Usuário</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->username}}</td>
                            <td>
                                <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Gerar relatório" target="_blank" href="{{route('admin.auditoria.relatorios.registros.usuario', $usuario->id)}}"><i class="small material-icons">chrome_reader_mode</i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Nenhuma auditoria encontrada</td>
                            <td>Nenhuma auditoria encontrada</td>
                            <td>Nenhuma auditoria encontrada</td>
                            <td>Nenhuma auditoria encontrada</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$usuarios->links()}}
            </div>
        </div>
    </div>
@endif
@endsection


@section('modal')
    @if(isset($modal1))
        $(document).ready(function(){
        $('#modal1').modal('open');
        });
    @endif
    @if(isset($modal2))
        $(document).ready(function(){
        $('#modal2').modal('open');
        });
    @endif
@endsection