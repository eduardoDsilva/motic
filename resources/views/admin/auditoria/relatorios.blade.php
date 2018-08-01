@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.auditoria')}}" class="breadcrumb">Alunos</a>
    <a href="{{route ('admin.auditoria.relatorios')}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

@section('titulo-header', 'Relatórios auditorias')

@section('conteudo-header', 'Esses são os relatórios de auditoria disponíveis no sistema!')

@includeIf('_layouts._sub-titulo')

<div class="section container col s12 m4 l8">
    <div class="card-panel">
        <div class="row">
            <div class="col s12 m12 l6">
                <div class="card small red darken-4 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title">Todos registros</span>
                        <p>Para gerar um relatório de todos os registros do sistema.</p>
                    </div>
                    <div class="card-action">
                        <a class="btn" target="_blank"
                           href="{{route ('admin.auditoria.registros')}}">Gerar relatório</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l6">
                <div class="card small purple darken-4 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title">Registro por usuário</span>
                        <p>Para gerar um relatório dos registros de um usuário do sistema.</p>
                    </div>
                    <div class="card-action">
                        <button class="modal-trigger btn" data-target="modal" href="#modal2"
                                type="submit">Gerar relatório
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@if(isset($usuarios))
    <!-- Modal Structure -->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <h4>Usuários</h4>

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data"
                      action="{{ route("admin.auditoria.relatorios.user.filtrar") }}">
                    <div class="row">
                        <div class="input-field col s4">
                            <select name="tipo" required>
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="name">Nome</option>
                                <option value="username">Username</option>
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
                                <a class="modal-trigger tooltipped" data-position="top" data-delay="50"
                                   data-tooltip="Gerar relatório" target="_blank"
                                   href="{{route ('admin.auditoria.relatorios.registro.individual', $usuario->id)}}"><i
                                            class="small material-icons">chrome_reader_mode</i></a>
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
    @if(isset($modal2))
        $(document).ready(function(){
        $('#modal2').modal('open');
        });
    @endif
@endsection