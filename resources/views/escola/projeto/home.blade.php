
@extends('layouts.app')

@section('titulo','Motic escola')

@section('breadcrumb')
    <a href="{{{route ('escola/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('escola/projeto/home')}}}" class="breadcrumb">Projetos</a>
@endsection

@section('content')

    @if(session('success'))
        {{session('success')}}
    @endif

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Projetos</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são os projetos cadastrados no sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="card-panel">

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="{{ url("escola/escola/show") }}">
                    <div class="row">
                        <div class="input-field col s4">
                            <select required>
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="nome">Nome</option>
                                <option value="area">Área</option>
                                <option value="estande">Estande</option>
                                <option value="escola">Escola</option>
                                <option value="categoria">Categoria</option>
                                <option value="status">Status</option>
                            </select>
                            <label>Filtros</label>
                        </div>

                        <div class="input-field col s7">
                            <input id="search" type="search">
                            <label for="search">Pesquise no sistema...</label>
                        </div>
                        {{csrf_field()}}
                        <div class="input-field col s1">
                            <a class="btn-floating "><i class="material-icons">search</i></a>
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
                            <th>Área</th>
                            <th>Estande</th>
                            <th>Resumo</th>
                            <th>Categoria</th>
                            <th>Escola</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($projetos as $projeto)
                            <tr>
                                <td>{{$projeto->id}}</td>
                                <td>{{$projeto->titulo}}</td>
                                <td>{{$projeto->area}}</td>
                                <td>{{$projeto->estande == null ? 'Estande não definida' : $projeto->estande}}</td>
                                <td class="limit">{{$projeto->resumo}}</td>
                                <td>{{$projeto->categoria->categoria}}</td>
                                <td>{{$projeto->escola->name}}</td>
                                <td>
                                    <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar"  href="{{ url("escola/projeto/update/".$projeto->id."/edita") }}"><i class="small material-icons">edit</i></a>
                                    <a data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar"  href="#modal1" data-id="{{$projeto->id}}" data-name="{{$projeto->titulo}}" data-projeto="normal"> <i class="small material-icons">delete</i></a>
                                    <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar"  href="{{ url("/escola/projeto/show/".$projeto->id) }}"> <i class="small material-icons">library_books</i></a>
                                    <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Rebaixar a projeto suplente"  href="{{ url("/escola/projeto/rebaixa/".$projeto->id) }}"> <i class="small material-icons">arrow_downward</i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Nenhum projeto encontrado</td>
                                <td>Nenhum projeto encontrado</td>
                                <td>Nenhum projeto encontrado</td>
                                <td>Nenhum projeto encontrado</td>
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

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large red">
                    <i class="large material-icons">mode_edit</i>
                </a>
                <ul>
                    <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Adicionar projeto" href="{{route ('escola/projeto/cadastro/registro')}}"><i class="material-icons">add</i></a></li>
                    <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Adicionar aluno" href="{{route ('escola/aluno/cadastro/registro')}}"><i class="material-icons">format_quote</i></a></li>
                    <li><a class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Adicionar professor" href="{{route ('escola/professor/cadastro/registro')}}"><i class="material-icons">publish</i></a></li>
                </ul>
            </div>

        </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Deletar</h4>
            <p>Você tem certeza que deseja deletar o projeto abaixo?</p>
            <div class="row">
                <label for="id_delete">ID</label>
                <div class="input-field col s12">
                    <input disabled class="validate" type="number" id="id_delete">
                    <input disabled class="validate" type="hidden" id="projeto">
                </div>
            </div>
            <div class="row">
                <label for="name_delete">Nome do projeto</label>
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
