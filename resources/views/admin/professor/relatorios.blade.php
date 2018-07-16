@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.professor')}}" class="breadcrumb">Professores</a>
    <a href="{{route ('admin.professor.relatorios')}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

    @section('titulo-header', 'Relatórios professores')

    @section('conteudo-header', 'Esses são os relatórios dos professores disponíveis no sistema!')

    @includeIf('_layouts._sub-titulo')

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card small red darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos os professores resumido</span>
                            <p>Para gerar um relatório de todos os professores do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small purple darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Todos professores completo</span>
                            <p>Para gerar um relatório de todos os dados dos professores do sistema</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small green darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Professor por escola</span>
                            <p>Para gerar um relatório dos professores de cada escola.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" disabled href="">Relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card small blue darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Professor individual</span>
                            <p>Para gerar um relatório de um professor específico do sistema./p>
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
            <h4>Alunos</h4>

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="row">
                        <div class="input-field col s4">
                            <select required name="tipo">
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="nome">Nome</option>
                                <option value="escola">Escola</option>
                                <option value="cpf">CPF</option>
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
                @forelse ($professores as $professor)
                    <tr>
                        <td>{{$professor->id}}</td>
                        <td>{{$professor->name}}</td>
                        <td>{{$professor->escola->name}}</td>
                        <td>
                            <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar" href="">
                                <i class="small material-icons">library_books</i></a>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td>Nenhum professor encontrado</td>
                        <td>Nenhum professor encontrado</td>
                        <td>Nenhum professor encontrado</td>
                        <td>Nenhum professor encontrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {{$professores->links()}}

        </div>
        <div class="modal-footer">
            <a class="btn red delete">Ok</a>
        </div>
    </div>

@endsection