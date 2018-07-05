@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.aluno')}}" class="breadcrumb">Alunos</a>
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
            <h1 class="header center orange-text">Alunos</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os alunos da sua escola!</h5>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="card-panel">

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="{{ route("admin.aluno.filtrar") }}">
                    <div class="row">
                        <div class="input-field col s4">
                            <select required name="tipo">
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="nome">Nome</option>
                                <option value="nascimento">Nascimento</option>
                                <option value="sexo">Sexo</option>
                                <option value="escola">Escola</option>
                                <option value="etapa">Ano/Etapa</option>
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
                    <th>Ano/Etapa</th>
                    <th>Escola</th>
                    <th>Turma</th>
                    <th>Projeto</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->id}}</td>
                        <td>{{$aluno->name}}</td>
                        <td>{{$aluno->etapa}}</td>
                        <td>{{$aluno->escola->name}}</td>
                        <td>{{$aluno->turma}}</td>
                        <td>{{($aluno->projeto_id == null ? ($aluno->suplente_id == null ? "Aluno sem projeto" : $aluno->suplente->titulo) : $aluno->projeto->titulo)}}</td>
                        <td>
                            <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar"  href="{{ route('admin.aluno.edit', $aluno->id) }}"><i class="small material-icons">edit</i></a>
                            <a data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar"  href="#modal1" data-id="{{$aluno->id}}" data-name="{{$aluno->name}}" data-tipo="aluno"> <i class="small material-icons">delete</i></a>
                            <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar"  href="{{ route('admin.aluno.show', $aluno->id) }}"> <i class="small material-icons">library_books</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {{$alunos->links()}}

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Adicionar aluno" href="{{route ('admin.aluno.create')}}"><i class="material-icons">add</i></a>
            </div>

        </div>
    </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Deletar</h4>
            <p>Você tem certeza que deseja deletar o aluno abaixo?</p>
            <div class="row">
                <label for="id_delete">ID</label>
                <div class="input-field col s12">
                    <input disabled class="validate" type="number" id="id_delete">
                    <input disabled class="validate" hidden type="text" id="tipo">
                </div>
            </div>
            <div class="row">
                <label for="name_delete">Nome do aluno</label>
                <div class="input-field col s12">
                    <input disabled class="validate" type="text" id="name_delete">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a class="btn red delete">Sim</a>
        </div>
    </div>

@endsection