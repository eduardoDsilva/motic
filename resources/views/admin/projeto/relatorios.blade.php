@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.projeto')}}" class="breadcrumb">Projetos</a>
    <a href="{{route ('admin.projeto.relatorios')}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Relatórios</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os relatórios disponíveis para os projetos do sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card small red darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos os projetos de forma resumida</span>
                            <p>Para gerar um relatório de todos os projetos do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small pink darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos projetos completo</span>
                            <p>Para gerar um relatório de todos os dados dos projetos do sistema</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small indigo darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Projetos por escola</span>
                            <p>Para gerar um relatório dos professores de cada escola.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small blue darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Projeto por categoria</span>
                            <p>Para gerar um relatório dos projetos por categoria do sistema./p>
                        </div>
                        <div class="card-action">
                            <button class="modal-trigger btn" disabled type="submit" data-target="modal1"
                                    href="#modal1">Relatório
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small green darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Projeto por disciplina</span>
                            <p>Para gerar um relatório dos projetos por disciplinas do sistema./p>
                        </div>
                        <div class="card-action">
                            <button class="modal-trigger btn" disabled type="submit" data-target="modal1"
                                    href="#modal1">Relatório
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small purple darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Projeto individual</span>
                            <p>Para gerar um relatório de um projeto específico do sistema./p>
                        </div>
                        <div class="card-action">
                            <button class="modal-trigger btn" disabled type="submit" data-target="modal1"
                                    href="#modal1">Relatório
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Projetos</h4>

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="row">
                        <div class="input-field col s4">
                            <select name="tipo" required>
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
                        <th>Título</th>
                        <th>Escola</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($projetos as $projeto)
                        <tr>
                            <td>{{$projeto->id}}</td>
                            <td>{{$projeto->titulo}}</td>
                            <td>{{$projeto->escola->name}}</td>
                            <td>
                                <a class="modal-trigger tooltipped" data-position="top" data-delay="50"
                                   data-tooltip="Editar"
                                   href="{{ url("admin/projeto/update/".$projeto->id."/edita") }}"><i
                                            class="small material-icons">edit</i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Nenhum projeto encontrado</td>
                            <td>Nenhum projeto encontrado</td>
                            <td>Nenhum projeto encontrado</td>
                            <td>Nenhum projeto encontrado</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$projetos->links()}}

            </div>
            <div class="modal-footer">
                <a class="btn red delete">Ok</a>
            </div>
        </div>

@endsection