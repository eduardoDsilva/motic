@extends('layouts.app')

@section('titulo','Motic Admin - Auditoria')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/auditoria/home')}}}" class="breadcrumb">Auditoria</a>
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
                <form method="POST" enctype="multipart/form-data" action="{{ url("admin/auditoria/filtrar") }}">
                    <div class="row">
                        <div class="input-field col s4">
                            <select name="tipo" drequired>
                                <option value="" disabled selected>Filtrar por...</option>
                                <option value="id">ID</option>
                                <option value="tipo">Tipo</option>
                                <option value="user">Usuário responsável</option>
                                <option value="id_user">ID do responsável</option>
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
                        <th>Usuário</th>
                        <th>ID do responsável</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($auditorias as $auditoria)
                        <tr>
                            <td>{{$auditoria->id}}</td>
                            <td>{{$auditoria->tipo}}</td>
                            <td width="70%">{{$auditoria->descricao}}</td>
                            <td width="20%">{{$auditoria->nome_usuario}}</td>
                            <td>{{$auditoria->user_id}}</td>
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
