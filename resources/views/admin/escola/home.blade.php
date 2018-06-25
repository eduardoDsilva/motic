
@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/escola/home')}}}" class="breadcrumb">Escolas</a>
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
            <h1 class="header center orange-text">Escolas</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são as escolas cadastradas no sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="card-panel">

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="{{ route("admin/escola/filtrar") }}">
                    <div class="row">
                        <div class="input-field col s4">
                            <select required name="tipo">
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="usuario">Usuário</option>
                                <option value="nome">Nome</option>
                                <option value="email">E-mail</option>
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
                    <th>Telefone</th>
                    <th>Usuário</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($escolas as $escola)
                    <tr>
                        <td>{{$escola->id}}</td>
                        <td>{{$escola->name}}</td>
                        <td>{{$escola->telefone}}</td>
                        <td>{{$escola->user->username}}</td>
                        <td>
                            <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar"  href="{{ url("/admin/escola/update/".$escola->id."/edita") }}"><i class="small material-icons">edit</i></a>
                            <a id="deletar" data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar" href="#modal1" data-id="{{$escola->id}}" data-name="{{$escola->name}}" data-tipo="escola"> <i class="small material-icons">delete</i></a>
                            <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar"  href="{{ url("/admin/escola/show/".$escola->id) }}"> <i class="small material-icons">library_books</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Nenhuma escola encontrada</td>
                        <td>Nenhuma escola encontrada</td>
                        <td>Nenhuma escola encontrada</td>
                        <td>Nenhuma escola encontrada</td>
                        <td>Nenhuma escola encontrada</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Deletar</h4>
                    <p>Você tem certeza que deseja deletar a escola abaixo?</p>
                    <div class="row">
                        <label for="id_delete">ID</label>
                        <div class="input-field col s12">
                            <input disabled class="validate" type="number" id="id_delete">
                            <input disabled class="validate" hidden type="text" id="tipo">
                        </div>
                    </div>
                    <div class="row">
                        <label for="name_delete">Nome da escola</label>
                        <div class="input-field col s12">
                            <input disabled class="validate" type="text" id="name_delete">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn red delete">Sim</a>
                </div>
            </div>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger" data-position="top" data-delay="50" data-tooltip="Adicionar Escola" href="{{route ('admin/escola/cadastro/registro')}}"><i class="material-icons">add</i></a>
            </div>
        </div>

    </div>

@endsection
