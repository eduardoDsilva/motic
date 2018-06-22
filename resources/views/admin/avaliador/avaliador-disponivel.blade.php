@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/avaliador/home')}}}" class="breadcrumb">Avaliador</a>
    <a href="{{{route ('admin/avaliador/showAvaliadorDisponivel')}}}" class="breadcrumb">Avaliadores disponíveis</a>
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
            <h1 class="header center orange-text">Avaliadores</h1>
            <div class="row center">
                <h5 class="header col s12 light">Avaliadores disponíveis</h5>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="card-panel">

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="{{ url("admin/escola/show") }}">
                    <div class="row">
                        <div class="input-field col s4">
                            <select required>
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="user">Usuário</option>
                                <option value="nome">Nome</option>
                                <option value="nscimento">Nascimento</option>
                                <option value="sexo">Sexo</option>
                                <option value="cpf">CPF</option>
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

            <table class="centered responsive-table highlight bordered">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Projetos</th>
                    <th>Usuário</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($avaliadores as $avaliador)
                    <tr>
                        <td>{{$avaliador->id}}</td>
                        <td>{{$avaliador->user->name}}</td>
                        <td>{{$avaliador->projetos}}</td>
                        <td>{{$avaliador->user->username}}</td>
                        <td>
                            <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Projetos"  href="{{ url("/admin/avaliador/atribuir/".$avaliador->id) }}"> <i class="small material-icons">label</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Adicionar avaliador" href="{{route ('admin/avaliador/registro')}}"><i class="material-icons">add</i></a>
            </div>

@endsection
