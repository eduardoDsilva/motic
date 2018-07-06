@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.disciplina')}}" class="breadcrumb">Disciplinas</a>
@endsection

@section('content')

    @if( isset($errors) && count($errors) > 0 )
        <div class="center-align">
            @foreach( $errors->all() as $error )
                <div class="chip red">
                    {{$error}}
                    <i class="close material-icons">close</i>
                </div>
            @endforeach
        </div>
    @endif

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Disciplinas</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são as disciplinas cadastradas no sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="card-panel">

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="{{ route("admin.disciplina.filtrar") }}">
                    <div class="row">
                        <div class="input-field col s12 m12 l4">
                            <select name="tipo" required>
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="nome">Nome</option>
                            </select>
                            <label>Filtros</label>
                        </div>

                        <div class="input-field col s10 m11 l7">
                            <input id="search" type="search" name="search" required>
                            <label for="search">Pesquise no sistema...</label>
                        </div>
                        {{csrf_field()}}
                        <div class="input-field col s1 m1 l1">
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
                        <th>Descricao</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($disciplinas as $disciplina)
                        <tr>
                            <td>{{$disciplina->id}}</td>
                            <td>{{$disciplina->name}}</td>
                            <td>{{$disciplina->descricao}}</td>
                            <td>
                                <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" href="{{ route("admin.disciplina.edit", $disciplina->id) }}"><i class="small material-icons">edit</i></a>
                                <a data-target="modal2" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar" href="#modal2" data-id="{{$disciplina->id}}" data-name="{{$disciplina->name}}" data-tipo="disciplina"><i class="small material-icons">delete</i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Nenhuma disciplina encontrada</td>
                            <td>Nenhuma disciplina encontrada</td>
                            <td>Nenhuma disciplina encontrada</td>
                            <td>Nenhuma disciplina encontrada</td>
                            <td>Nenhuma disciplina encontrada</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

                <div class="fixed-action-btn">
                    <a data-target="modal3" data-target="modal3" class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger" data-position="top" data-delay="50" data-tooltip="Adicionar disciplina" href="#modal3"><i class="material-icons">add</i></a>
                </div>

                <!-- Modal Structure -->
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <h4>Deletar</h4>
                        <p>Você tem certeza que deseja deletar a disciplina abaixo?</p>
                        <div class="row">
                            <label for="id_delete">ID</label>
                            <div class="input-field col s12">
                                <input disabled class="validate" type="number" id="id_delete">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name_delete">Nome da disciplina</label>
                            <div class="input-field col s12">
                                <input disabled class="validate" type="text" id="name_delete">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn red delete">Sim</a>
                    </div>
                </div>

                <!-- Modal Structure -->
                <div id="modal3" class="modal">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.disciplina.store') }}">
                        <div class="modal-content">
                            <h4>Adicionar disciplina</h4>

                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <i class="material-icons prefix">book</i>
                                    <label for="nome">Nome</label>
                                    <input type="text" name="name" required>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="input-field col s12 m12 l12">
                                    <i class="material-icons prefix">assignment</i>
                                    <textarea name="descricao" data-length="240" id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Descrição</label>
                                    <input disabled class="validate" hidden type="text" id="tipo">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>salvar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
