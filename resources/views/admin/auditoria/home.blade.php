@extends('layouts.app')

@section('titulo','Motic Admin - Auditoria')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.auditoria')}}" class="breadcrumb">Auditoria</a>
@endsection

@section('content')

    @if(session('success'))
        {{session('success')}}
    @endif

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Auditoria</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são os registros realizados no sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="card-panel">

            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="{{ route("admin.auditoria.filtrar") }}">
                    <div class="row">
                        <div class="input-field col s12 m12 l4">
                            <select name="tipo" drequired>
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="tipo">Tipo</option>
                                <option value="objeto">Objeto</option>
                                <option value="user">Usuário responsável</option>
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

            <div class="row">
                <table class="centered responsive-table highlight bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Descricao</th>
                        <th>Objeto</th>
                        <th>Usuário</th>
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
                        </tr>
                    @empty
                        <tr>
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

@endsection
