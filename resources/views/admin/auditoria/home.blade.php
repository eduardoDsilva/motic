@extends('layout.site')

@section('titulo','Motic Admin - Auditoria')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/auditoria/home')}}}" class="breadcrumb">Auditoria</a>
@endsection

@section('conteudo')

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

            <table class="centered responsive-table highlight bordered">

                <form method="POST" enctype="multipart/form-data" action="{{ url("admin/escola/show") }}">
                    <div class="input-field">
                        <input id="search" type="search">
                        <label for="search"><i class="material-icons">search</i></label>
                    </div>
                    {{csrf_field()}}
                </form>
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Descricao</th>
                        <th>Usuário Responsável</th>
                        <th>ID do responsável</th>
                        <th>Visualizar</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($auditorias as $auditoria)
                    <tr>
                        <td>{{$auditoria->tipo}}</td>
                        <td class="limit">{{$auditoria->descricao}}</td>
                        <td>{{$auditoria->nome_usuario}}</td>
                        <td>{{$auditoria->user_id}}</td>
                        <td><a data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar"  href="#modal1" data-user_id="{{$auditoria->user_id}}" data-tipo="{{$auditoria->tipo}}" data-id="{{$auditoria->id}}" data-nome_usuario="{{$auditoria->nome_usuario}}" data-descricao="{{$auditoria->descricao}}"> <i class="small material-icons">search</i></a></td>
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

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Visualizar</h4>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tipo</th>
                                <th>Descricao</th>
                                <th>Usuário Responsável</th>
                                <th>ID do responsável</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="id_auditoria"></td>
                                <td id="tipo_auditoria"></td>
                                <td id="descricao_auditoria"></td>
                                <td id="usuario_auditoria"></td>
                                <td id="responsavel_auditoria"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
